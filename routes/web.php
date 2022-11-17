<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;




Route::get('/', function () {
    return view('welcome');
});

Route::get('/login', function () {
    return view('login');
});

Route::get('/register', function () {
    return view('register');
});

//post to save the user here
Route::post('/signup-user', [Usercontroller::class, 'registerUser'])->name('signupUser');
Route::post('/login-user', [Usercontroller::class, 'loginUser'])->name('loginUser');
