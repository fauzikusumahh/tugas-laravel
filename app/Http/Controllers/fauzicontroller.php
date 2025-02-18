<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class fauzicontroller extends Controller
{
    public function main()
    {
        return view('template\main');
    }

    public function form()
    {
        return view('form');
    }

    public function data()
    {
        return view('data');
    }

    public function index()
    {
        return view('index');
    }

};
