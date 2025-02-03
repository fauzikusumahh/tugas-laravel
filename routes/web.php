<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\genrescontroller;
use App\Http\Controllers\Castcontroller;

Route::get('/', function () {
    return view('index');
});

Route::get('/index', function () {
    return view('index');
});

Route::get('/formm', function () {
    return view('formm');
});

Route::get('/welcome', function () {
    return view('welcome');
});

Route::get('/beranda', function () {
    return view('template.main');
});


//route genre
route::get('genre', [genrescontroller::class,'tampil'])->name('genre.tampil');
route::get('genre/tambah', [genrescontroller::class,'tambah'])->name('genre.tambah');
route::post('genre/submit', [genrescontroller::class,'submit'])->name('genre.submit');
route::get('genre/edit/{id}', [genrescontroller::class,'edit'])->name('genre.edit');
route::post('genre/uodate/{id}', [genrescontroller::class,'update'])->name('genre.update');
route::post('genre/delete/{id}', [genrescontroller::class,'delete'])->name('genre.delete');

//route cast
Route::get('cast', [CastController::class,'tampil'])->name('cast.tampil');
Route::get('cast/tambah', [CastController::class,'tambah'])->name('cast.tambah');
Route::post('cast/submit', [CastController::class,'submit'])->name('cast.submit');
Route::get('cast/edit/{id}', [CastController::class, 'edit'])->name('cast.edit');
Route::post('cast/update/{id}', [CastController::class, 'update'])->name('cast.update');
Route::post('cast/delete/{id}', [CastController::class, 'delete'])->name('cast.delete');