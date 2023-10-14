<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AuthManager extends Controller
{
    function login(){
        return view('login');
    }

    function loginPost(Request $request){
        $request->validate([
            'email' => 'required',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if(Auth::attempt($credentials)){
            return redirect()->intended('home');
        }
        return redirect(route('/login'))->with("error", "Email or Password incorrect");
    }

    public function destroy(){
        Session:: flush();
        Auth::logout();
        return redirect(route('/login'));

    }
}
