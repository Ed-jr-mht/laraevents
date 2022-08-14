<?php

namespace App\Http\Controllers\Organization\Event;

use App\Http\Controllers\Controller;
use App\Models\{Event, User};
use App\Services\EventService;
use Illuminate\Http\Request;

class EventSubscriptionController extends Controller
{
    public function store(Event $event,Request $request){
        $user = User::findOrFail($request->user_id);

        if(EventService::userSubscribedOnEvent($user,$event)){
            return back()->with('warning','Este participante já está inscrito nesse Evento!!!');
        }

        if (EventService::eventEndDateHasPassed($event)){
            return back()->with('warning','Operação invalida! o evento já Foi!!! , está atrasado ein !!!');
        }


        if (EventService::eventParticipantsLimitHasReached($event)){
            return back()->with(
                'warning',
                'LOTOU!!!, Não é possível inscrever o paticipante no evento pois o limite de parcitipantes foi atingido'
            );
        }


        $user->evets()->attach($event->id);

        return back()->with('success','Inscrição no evento realizada com S U C C E S S ! ! ! ');

    }
    public function destroy(Event $event, User $user){


        if (EventService::eventEndDateHasPassed($event)) {

            return back()->with('warning','Operação Invalida! O evento já ocorreu! Sinto muito! :/ ');

        }

        if(!EventService::userSubscribedOnEvent($user,$event)){

            return back()->with('warning','O participante não está inscrito no Evento, Tá por aqui não!!!');
        }

        $user->events()->detach($event->id);

        return back()->with('success','Inscrição no Evento removida com  S U C C E S S  !! ');

    }
}
