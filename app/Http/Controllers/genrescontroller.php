<?php

namespace App\Http\Controllers;

use App\Models\Genres;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class GenresController extends Controller
{
    public function tampil()
    {
        $genres = Genres::get();
        return view('genre.tampil', compact('genres'));
    }

    public function tambah()
    {
        return view('genre.tambah');
    }

    public function submit(Request $request)
    {
        $genres = New Genres();
        $genres->name = $request->name;
        $genres->save();

        return redirect()->route('genre.tampil');
    }

    public function edit($id)
    {
        $genres = Genres::find($id);
        return view('genre.edit', compact('genres'));
    }

    public function update(Request $request, $id)
    {
        $genres = Genres::find($id);
        $genres->name = $request->name;
        $genres->update();

        return redirect()->route('genre.tampil');

    }

    public function delete($id)
    {
        $genres = Genres::find($id);
        $genres->delete();

        return redirect()->route('genre.tampil');

    }
}
