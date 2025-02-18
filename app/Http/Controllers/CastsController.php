<?php

namespace App\Http\Controllers;

use App\Models\Casts;
use Illuminate\Http\Request;
use Psy\CodeCleaner\ReturnTypePass;

class CastsController extends Controller
{
    public function tampil()
    {
        $casts = Casts::get();
        return view('cast.tampil', compact('casts'));
    }

    public function tambah()
    {
        return view('cast.tambah');
    }

    public function submit(Request $request)
    {
        $casts = New Casts();
        $casts->name = $request->name;
        $casts->age = $request->age;
        $casts->bio = $request->bio;
        $casts->save();

        return redirect()->route('cast.tampil');
    }

    public function edit($id)
    {
        $casts = Casts::find($id);
        return view('cast.edit', compact('casts'));
    }

    public function update(Request $request, $id)
    {
        $casts = Casts::find($id);
        $casts->name = $request->name;
        $casts->age = $request->age;
        $casts->bio = $request->bio;
        $casts->update();

        return redirect()->route('cast.tampil');

    }

    public function delete($id)
    {
        $casts = Casts::find($id);
        $casts->delete();

        return redirect()->route('cast.tampil');

    }
}
