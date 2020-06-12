<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGenre;
use Illuminate\Http\Request;
use App\Genre;

class GenreController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



    public function index()
    {
        $items = Genre::orderBy('name', 'asc')->get();
        return view('genre.list', [
            'title' => 'Žanri',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('genre.form', [
            'title' => 'Pievienot Žanru',
            'genre' => new Genre()
        ]);
    }

    public function store(StoreGenre $request)
    {
        $genre = new Genre();

        $this->saveGenreData($genre, $request);

        return redirect('/genres');
    }


    public function edit(Genre $genre)
    {
        return view('genre.form', [
            'title' => 'Labot žanru',
            'genre' => $genre
        ]);
    }

    public function update(Genre $genre, StoreGenre $request)
    {
        $this->saveGenreData($genre, $request);

        return redirect('/genres');
    }


    public function delete(Genre $genre)
    {
        $genre->delete();
        return redirect('/genres');
    }

    private function saveGenreData($genre, $request)
    {
        $validated = $request->validated();

        $genre->name = $validated['name'];
        $genre->display = (bool) ($validated['display'] ?? false);

        $genre->save();
    }




}
