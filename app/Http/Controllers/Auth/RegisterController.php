<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\{User,Address,Phone};
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $requestData= $request->all();

        $requestData ['user'] ['role'] = 'participant';

        $user= User::create($requestData['user']);

        $user->address()->create($requestData['address']);

        foreach($requestData['phones'] as $phone){
            $user->phones()->create($phone);

        }








        //$requestData['address']['user_id'] = $user->id;

        //Address::create($requestData['address']);

        //User::create($requestData);

       // $password = bcrypt($requestData['password']);

       //$requestData['password'] = $password;


    }
}
