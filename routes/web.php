<?php

use App\Http\Controllers\AdministController;
use App\Http\Controllers\PublicacionController;
use App\Http\Controllers\RolController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Models\Publi;

Route::get("/", function () {
    return view("layauts.index",[
        "publis"=> Publi::all()
    ]);
    
})->name('home.index');

Route::get("/search", function () {
    return view("partial.post",[
        'publis' => Publi::where('date', 'LIKE', '%'.request('q').'%')->get()
    ]);
    
});


Route::get('/login', [SessionController::class, 'create'])->name('login.index');
Route::post('/login', [SessionController::class, 'regis'])->name('login.regis');
Route::get('/logout', [SessionController::class, 'destroy'])->name('login.destroy');

Route::get('/register', [RegisterController::class, 'create'])->name('register.index');
Route::post('/register', [RegisterController::class, 'regis'])->name('register.regis');

Route::get('/admin', [AdministController::class, 'administ'])->middleware('admini')->name('aminist.index');

Route::get('/login', [SessionController::class, 'create'])->name('login.index');

Route::get('/publicacion', [PublicacionController::class, 'create'])->name('publi.index');
Route::post('/publicacion', [PublicacionController::class, 'poste'])->name('publi.poste');

Route::get('/admin', [RolController::class, 'index'])->name('admin.index');
Route::get('/admin/{id}', [RolController::class, 'show'])->name('admin.show');
Route::get('/admin/{id}', [RolController::class, 'showdos'])->name('admin.showdos');
Route::patch('/admin/{id}', [RolController::class, 'update'])->name('admin.update');

