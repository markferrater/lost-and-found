<?php

namespace App\Http\Controllers;

use App\Models\register;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class authController extends Controller
{
    public function show_register(){
        return view('auth.register');
    }

    public function show_login(){
        return view('auth.login');
    }

    public function login(Request $request){
        $credentials = $request->only('email','password');

        $remember = $request->has('remember');

        if (Auth::attempt($credentials, $remember)) {
            $request->session()->regenerate();
            return redirect()->route('home');
        }

        return back()->withErrors([
            'email' => 'Invalid credentials.',
        ]);
    }

    public function register(Request $request){
        $request->validate([
            'first_name' => 'required',
            'middle_name' => 'required',
            'last_name' => 'required',
            'email' => 'required|email|unique:user_account,email',
            'password' => 'required|min:6|same:confirm_password',
            'confirm_password' => 'required'
        ]);

        register::create([
            'first_name' => $request->first_name,
            'middle_name' => $request->middle_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        return redirect()->route('login')->with('success', 'Registered successfully. Please login.');


    }

    public function logout(Request $request){
           Auth::logout();
           $request->session()->invalidate();
           $request->session()->regeneratetoken();

           return redirect()->route('login');
    }

}
