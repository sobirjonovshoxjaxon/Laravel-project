<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Http\Requests\RegisterRequest;
use App\Rules\ReCaptcha;
use Illuminate\Support\Facades\Auth;
use Mail;
use App\Mail\Message;


class AuthController extends Controller
{
    public function registerPage(){
        return view('register');
    }

    public function registerSave(RegisterRequest $request){

        $data = $request->all();

        $user = User::create($data);
        Mail::to("shohjahonsobirjonov76@gmail.com")->send(new Message($user));
        auth()->login($user);
        return to_route('index.page');
     
    }

}

 
