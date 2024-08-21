<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class Registrationcontroller extends Controller
{
    //

    public function getRegister(){
        return view('regsitration');
    }

    public function Register(Request $request)
    {

        $register = $request->validate([
            'name' => 'required',
            'email' => 'required|email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create($register);

        if($user){
            return redirect()->route('login');
        }
        else
        {
            return redirect()->route('regsiter');
        }

    }

}
