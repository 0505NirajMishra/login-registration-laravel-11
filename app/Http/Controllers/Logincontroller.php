<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class Logincontroller extends Controller
{
    //

    public function getLogin()
    {
        return view('login');
    }

    public function Login(Request $request)
    {
        $data = $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if(Auth::attempt(['email' => $data['email'], 'password' => $data['password']])){
            return redirect()->route('dashboard');
        }

    }

    public function Dashboard(Request $request)
    {
        return view('dashboard');
    }

    public function DemoPage(Request $request)
    {
        return view('demopage');
    }

    public function logout()
    {
        Auth::logout();
        return redirect()->route('login');
    }

}
