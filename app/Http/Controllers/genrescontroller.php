<?php

namespace App\Http\Controllers;

use App\Models\Genre;
use Illuminate\Http\Request;
use Psy\Codecleaner\ReturnTrypass;
use Illuminate\Support\Facades\DB;


class genrescontroller extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil()
    {
        //
        $genre = genre::get();
        return view('genre.tampil',compact('genre'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        //
        return view('genre.tambah');
    }

    public function submit(Request $request)
    {
        $genre = New Genre();
        $genre->nama = $request->nama;
        $genre->save();

        return redirect()->route('genre.tampil');
    }

    public function edit($id)
    {
        $genre = Genre::find($id);
        return view('genre.edit', compact('genre'));
    }

    public function update(Request $request, $id)
    {
        $genre = Genre::find($id);
        $genre->nama = $request->nama;
        $genre->update();

        return redirect()->route('genre.tampil');

    }


    public function delete($id)
    {
        $genre =genre::find($id);
        $genre->delete();
        return redirect()->route('genre.tampil');
    }
}