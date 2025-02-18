<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\fauzicontroller;
use App\Http\Controllers\GenresController;
use App\Models\Genres;
use App\Http\Controllers\castsController;
use App\Models\casts;
use App\Http\Controllers\MoviesController;
use App\Models\Movies;

Route::get('/main', [fauzicontroller::class,'main']);
Route::get('/', [fauzicontroller::class,'index']);

//route html

Route::get('/pertama', function () {
  return view('tugashtml.pertama');
});

Route::get('/kedua', function () {
  return view('tugashtml.kedua');
});

Route::get('/ketiga', function () {
  return view('tugashtml.ketiga');
});

//route genre
Route::get('genre', [GenresController::class,'tampil'])->name('genre.tampil');
Route::get('genre/tambah', [GenresController::class,'tambah'])->name('genre.tambah');
Route::post('genre/submit', [GenresController::class,'submit'])->name('genre.submit');
Route::get('genre/edit/{id}', [GenresController::class, 'edit'])->name('genre.edit');
Route::post('genre/update/{id}', [GenresController::class, 'update'])->name('genre.update');
Route::post('genre/delete/{id}', [GenresController::class, 'delete'])->name('genre.delete');


//route cast
Route::get('cast', [castsController::class,'tampil'])->name('cast.tampil');
Route::get('cast/tambah', [castsController::class,'tambah'])->name('cast.tambah');
Route::post('cast/submit', [castsController::class,'submit'])->name('cast.submit');
Route::get('cast/edit/{id}', [castsController::class, 'edit'])->name('cast.edit');
Route::post('cast/update/{id}', [castsController::class, 'update'])->name('cast.update');
Route::post('cast/delete/{id}', [castsController::class, 'delete'])->name('cast.delete');

Route::get('movie', [MoviesController::class, 'tampil'])->name('movie.tampil');
Route::get('movie/tambah', [MoviesController::class, 'tambah'])->name('movie.tambah');
Route::post('movie/submit', [MoviesController::class, 'submit'])->name('movies.submit');
Route::get('movie/edit/{id}', [MoviesController::class, 'edit'])->name('movie.edit');
Route::put('/movie/update/{id}', [MoviesController::class, 'update'])->name('movie.update');
Route::post('/movie/delete/{id}', [MoviesController::class, 'delete'])->name('movie.delete');

// Route::resource('/movie', MovieController::class);
