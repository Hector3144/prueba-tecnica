<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('layauts.index');
})->name('home.index');

Route::get('/login', [SessionController::class, 'create'])->name('login.index');
Route::post('/login', [SessionController::class, 'regis'])->name('login.regis');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'regis'])->name('register.regis');

