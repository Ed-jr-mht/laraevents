<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function create() {
        return view('auth.register');
    }

    public function store(Request $request)
    {
        $requestData= $request->all();
        $requestData['role'] = 'participant';

        //User::create($requestData);

       // $password = bcrypt($requestData['password']);

       //$requestData['password'] = $password;

       User::create($requestData);

    }
}
