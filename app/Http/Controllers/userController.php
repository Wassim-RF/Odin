<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class userController extends Controller
{
    public function index() {
        header("Location: /login");
        exit();
    }

    public function showHome() {
        return view('home');
    }

}
