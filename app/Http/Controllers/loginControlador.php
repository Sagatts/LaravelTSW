<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LoginControlador extends Controller
{
    public function login(){
        return view('login.login');
    }
}
