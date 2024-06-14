<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function index()
    {
        if (Auth::check()) {
            // Redirect to the dashboard if the user is authenticated
            return redirect('/dashboard');
        }
        return view('login', [
            'logo'=>'img/logo_black.png',
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
