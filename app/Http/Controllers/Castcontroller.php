<?php

namespace App\Http\Controllers;

use App\Models\Cast;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class CastController extends Controller
{
    public function tampil()
    {
        $cast = Cast::get();
        return view('cast.tampil', compact('cast'));
    }

    public function tambah()
    {
        return view('cast.tambah');
    }

    public function submit(Request $request)
    {
        $cast = New Cast();
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->save();

        return redirect()->route('cast.tampil');
    }

    public function edit($id)
    {
        $cast = Cast::find($id);
        return view('cast.edit', compact('cast'));
    }

    public function update(Request $request, $id)
    {
        $cast = Cast::find($id);
        $cast->nama = $request->nama;
        $cast->umur = $request->umur;
        $cast->bio = $request->bio;
        $cast->update();

        return redirect()->route('cast.tampil');

    }

    public function delete($id)
    {
        $cast = Cast::find($id);
        $cast->delete();

        return redirect()->route('cast.tampil');

    }
}