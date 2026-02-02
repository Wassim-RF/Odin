<?php

namespace App\Services;

use Illuminate\Support\ServiceProvider;
use App\Models\User;

class userServices extends ServiceProvider
{
    public function existeUser(string $email) {
        return User::where('email' , $email)->first();
    }
}
