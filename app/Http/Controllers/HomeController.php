<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){

        $usertype = Auth()->user()->usertype;

        if($usertype == 'user'){

            return to_route('dashboard');
        }elseif($usertype == 'admin'){

            return to_route('admin.index');
        }else{

            return redirect()->back();
        }
    }
}
