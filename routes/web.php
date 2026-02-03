<?php

use Illuminate\Support\Facades\Route;
use App\Http\Requests\LoginRequest;
use App\Http\Middleware\CheckAccountStatus;
use App\Http\Controllers\userController;
use App\Http\Controllers\authController;
use App\Http\Controllers\CategoriesController;
use App\Http\Controllers\LinksController;


//get
Route::get('/', [userController::class , "index"]);
Route::get('/login' , [authController::class , "showLogin"]);
Route::get('/register' , [authController::class , "showRegister"]);
Route::get('/home' , [userController::class , 'showHome'])->middleware(CheckAccountStatus::class);

//post
Route::post('/login' , [authController::class , "login"])->name('auth.login');
Route::post('/register' , [authController::class , "register"])->name('auth.register');
Route::post('/logout' , [authController::class , "logout"])->name('auth.logout');
Route::post('/addCategorie' , [CategoriesController::class , 'store'])->name('create.categorie');
Route::post('/addLink' , [LinksController::class , 'store'])->name('create.link');