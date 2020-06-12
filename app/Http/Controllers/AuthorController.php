<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAuthor;
use Illuminate\Http\Request;
use App\Author;

class AuthorController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth');
    }



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

    public function store(StoreAuthor $request)
    {
        $author = new Author();

        $this->saveAuthorData($author, $request);

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
        $this->saveAuthorData($author, $request);

        return redirect('/authors');
    }


    public function delete(Author $author)
    {
        $author->delete();
        return redirect('/authors');
    }

    private function saveAuthorData($author, $request)
    {
        $validated = $request->validated();

        $author->name = $validated['name'];
        $author->display = (bool) ($validated['display'] ?? false);

        $author->save();
    }




}
