<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class AuthController extends Controller
{
    public function getSignIn()
    {
        return view('auth.signin');
    }

    public function signIn(Request $request)
    {

        $request->validate([
            'email' => 'required|exists:users,email',
            'password' => 'required'
        ]);

        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {
            return redirect()->intended('/')->with('status', 'Sign in');
        }

        return redirect('signin')->withErrors('Invalid credentials');
    }

    public function signOut()
    {

        Session::flush();
        Auth::logout();

        return redirect('signin')->with('status', 'Signed out');
    }
}
