<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\Request;
use App\Services\authServices;
use App\Services\userServices;
use App\Http\Requests\LoginRequest;
use App\Http\Requests\registerRequest;

class authController extends Controller
{
    public function showLogin() {
        return(view('auth.login'));
    }

    public function showRegister() {
        return(view('auth.register'));
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

    public function register(registerRequest $registerRequest , userServices $userServices , authServices $authServices) {
        $user = $userServices->existeUser($registerRequest->email);

        if($user) {
            return redirect()->back()->with('error' , 'Ce email est existe!');
        }

        $data = [
            'name' => $registerRequest->name,
            'email' => $registerRequest->email,
            'password' => Hash::make($registerRequest->password)
        ];

        $authServices->createAccount($data);

        return redirect('/login')->with('success' , 'Vous creer votre compte en succe');
    }

    public function logout(Request $request) {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect('/login');
    }
}
