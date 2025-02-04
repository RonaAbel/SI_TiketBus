<?php

namespace App\Http\Controllers;

use Auth;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function halamanlogin()
    {
        return view('Login.login');
    }

    public function postlogin(Request $request)
    {
        if(Auth::attempt($request->only('email','password')))
        {
            return redirect('/home');
        }
        return redirect('/login');
    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
