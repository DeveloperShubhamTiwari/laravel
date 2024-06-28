<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use App\Models\User;

class AuthController
{
    public function login()
    {
        return view('admin.login');
    }

    public function loginpage()
    {
        echo 'You are on the login page';
        exit;
    }

  
    public function checkLogin(Request $request)
    {
        $credentials =   $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);
       
        if (Auth::attempt($credentials)) {
           return redirect()->route('admin.dashboard');
        } else {
            return Redirect::back()->withErrors(['login_failed' => 'Invalid email or password']);
        }
    }
   
    public function logout()
    {
        // Log the user out
        Auth::logout();
        
        // Redirect to the login page
        return redirect()->route('login');
    }
}
