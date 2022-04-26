<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class LoginController extends Controller
{
    public function login(){

        return view('user.login', [
            'title' => "Login"
        ]);

    }

    public function register(){

        return view('user.register', [
            'title' => "Register"
        ]);

    }
}
