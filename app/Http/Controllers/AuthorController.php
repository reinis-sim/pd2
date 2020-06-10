<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{
    public function index()
    {
        $items = Author::orderBy('name', 'asc')->get();
        return view('author.list', [
            'title' => 'Autori',
            'items' => $items
        ]);
    }

    public function create()
    {
        return view('author.form', [
            'title' => 'Pievienot autoru',
            'author' => new Author()
        ]);
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'display' => 'nullable',
        ]);

        $author = new Author();

        $author->name = $validatedData['name'];
        $author->display = (bool) ($validated['display'] ?? false);

        return redirect('/authors');
    }

    public function edit(Author $author)
    {
        return view('author.form', [
            'title' => 'Labot autoru',
            'author' => $author
        ]);
    }

    public function update(Author $author, StoreAuthor $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'display' => 'nullable',
        ]);


        $author->name = $validatedData['name'];
        $author->display = (bool) ($validated['display'] ?? false);

        return redirect('/authors');
    }

    public function delete(Author $author)
    {
        $author->delete();
        return redirect('/authors');
    }



}
