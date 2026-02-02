<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;

Route::get('/', [userController::class , "index"]);
Route::get('/login' , [authController::class , "showLogin"]);
Route::post('/login' , [authController::class , "login"])->name('auth.login');