<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        return view('Login', [
            'logo'=>'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcQeElJVSnJKRMzlEH4PI7cehTujTVB2jmSHd9F3eELngQ&s',
            'title' => 'LOGIN ADMIN',
        ]);
    }

    public function authenticate(Request $request)
    {
        $credentials = $request->only('email', 'password');

       if (Auth::attempt($credentials)) {
           $request->session()->regenerate();
           return redirect()->intended('/dashboard');
       }
       return back()->with('loginError', 'Login failed!');
    }

    public function logout(Request $request)
    {
        Auth::logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/login');
    }
}
