<?php

use App\Http\Controllers\AdministController;
use App\Http\Controllers\PublicacionController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;


Route::get('/', [PublicacionController::class, 'index'])->name('home.index');

Route::get('/login', [SessionController::class, 'create'])->name('login.index');
Route::post('/login', [SessionController::class, 'regis'])->name('login.regis');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'regis'])->name('register.regis');

Route::get('/admin', [AdministController::class, 'administ'])->middleware('admini')->name('aminist.index');

Route::get('/login', [SessionController::class, 'create'])->name('login.index');

Route::get('/publicacion', [PublicacionController::class, 'create'])->name('publi.index');
Route::post('/publicacion', [PublicacionController::class, 'poste'])->name('publi.poste');