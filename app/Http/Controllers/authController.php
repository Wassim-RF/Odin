<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Services\authServices;
use App\Services\userServices;
use App\Http\Requests\LoginRequest;

class authController extends Controller
{
    public function showLogin() {
        return(view('auth.login'));
    }


    public function login(LoginRequest $loginRequest , userServices $userServices) {
        $user = $userServices->existeUser($loginRequest->email);

        if(!$user) {
            return redirect()->back()->with('error' , 'Ce email existe pas');
        }

        if(!Hash::check($loginRequest->password , $user->password)) {
            return redirect()->back()->with('error' , 'Le mot de pass est incorrecte');
        }

        Auth::login($user);

        return redirect('/home')->with('success', 'Bienvenue ' . $user->name . '!');
    }
}
