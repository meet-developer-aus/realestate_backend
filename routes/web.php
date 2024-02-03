<?php

use Illuminate\Support\Facades\Route;

use Laravel\Fortify\Fortify;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('auth.dashboard');
})->middleware( middleware: 'auth');


Fortify::resetPasswordView(function () {
    return view('auth.passwords.reset');
});

Fortify::requestPasswordResetLinkView(function () {
    return view('auth.passwords.email');
});
  
