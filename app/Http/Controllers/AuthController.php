<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Auth;


class AuthController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function registerSave(RegisterRequest $request){

        $data = $request->all();
        $user = User::create($data);
        auth()->login($user);
        return to_route('index.page');
    }

    public function loginPage(){
        return view('login');
    }

    public function loginCheck(Request $request){

       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
 
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
 
            return redirect()->intended('/');
        }
 
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');
    }
}

 
