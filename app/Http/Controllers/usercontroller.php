<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;

class usercontroller extends Controller
{
    public function index()
    {                                     
    return view ('index');
    }
    public function formm()
    { 
        return view ('formm');
    }
    public function welcome()
    {
        return view('welcome');
    }
    public function main()
    {
        return view('template\main');
    }

}
