<?php

namespace App\Http\Controllers\CreatorAuth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Auth;

class LoginController extends Controller
{

    protected $redirectTo = '/home/creator';


   use AuthenticatesUsers;

    protected function guard(){
        return Auth::guard('creator');
    }

   

    public function showLoginForm()
    {
        return view('/welcome');
    }
}

