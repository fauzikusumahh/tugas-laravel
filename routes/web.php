<?php
use Illuminate\support\Facades\route;

Route::get('/', function () {
    return view('index');
});

Route::get('/form', function () {
    return view('form') ;
});

Route::get('/welcome', function () {
    return view('welcome'); 
});








