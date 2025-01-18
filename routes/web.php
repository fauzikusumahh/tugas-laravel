<?php
use Illuminate\support\Facades\Route;
use App\Http\Controllers\usercontroller;

// Route::get('/', function () {
    //     return view('index');
    // });
    
    // Route::get('/form', function () {
        //     return view('form');
        // });
        
        // Route::get('/welcome', function () {
            //     return view('welcome'); 
            // });
            

 route::get('/master',   [usercontroller::class,'master']);
 route::get('/index',   [usercontroller::class,'index']);
 route::get('/form',    [usercontroller::class,'form']);
 route::get('/welcome', [usercontroller::class,'welcome']);
            
            
            
            








