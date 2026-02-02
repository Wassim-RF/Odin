<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\LoginRequest;

class authController extends Controller
{
    public function showLogin() {
        return(view('auth.login'));
    }


    public function login(LoginRequest $loginRequest) {
        
    }
}
