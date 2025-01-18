<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {                                     
    return view ('index');
    }
    public function form()
    { 
        return view ('form');
    }
    public function welcome()
    {
        return view('welcome');
    }

    public function master()
    {
        return view('template\master');
    }

}
