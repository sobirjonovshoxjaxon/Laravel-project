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

}

 
