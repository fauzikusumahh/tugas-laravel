<?php

namespace App\Http\Controllers;

use App\Models\Movies;
use App\Models\Genres;
use Illuminate\Http\Request;
use App\Http\Requests\StoreMovieRequest;
use App\Http\Requests\UpdateMovieRequest;
use Illuminate\Support\Facades\DB;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function tampil()
    {
        $movies = Movies::get();
        $genres = Genres::all(); // Mengambil semua genre jika dibutuhkan
        return view('movie.tampil', compact('movies', 'genres'));
        $movies = Movies::with('genres')->get();


    }

    /**
     * Show the form for creating a new resource.
     */
    public function tambah()
    {
        $genres = Genres::all();
        return view('movie.tambah', compact('genres'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function submit(Request $request)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|digits:4|integer',
            'genre_id' => 'required|exists:genres,id',
            'summary' => 'required|string',
        ]);

        // Simpan data ke database
        Movies::create([

            'title' => $request->title,
            'year' => $request->year,
            'genre_id' => $request->genre_id,
            'summary' => $request->summary,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('movie.tampil')->with('success', 'Movie berhasil ditambahkan!');
    }

    public function edit($id)
    {
        $movies = Movies::find($id);
        $genres = Genres::all(); // Mengambil semua genre
        return view('movie.edit', compact('genres', 'movies'));
    }


    public function update(Request $request, $id)
    {
        // Validasi input
        $request->validate([
            'title' => 'required|string|max:255',
            'year' => 'required|digits:4|integer',
            'genre_id' => 'required|exists:genres,id',
            'summary' => 'required|string',
        ]);

        // Cari movie berdasarkan ID
        $movies = Movies::findOrFail($id);
        $genres = Genres::all();
        // Update data movie
        $movies->update([
            'title' => $request->title,
            'year' => $request->year,
            'genre_id' => $request->genre_id,
            'summary' => $request->summary,
        ]);

        // Redirect dengan pesan sukses
        return redirect()->route('movie.tampil')->with('success', 'Movie berhasil diperbarui!');
    }


    // Metode lainnya...
    public function delete($id)
    {
        $movies = movies::find($id);
        $movies->delete();

        return redirect()->route('movie.tampil');

    }
}
