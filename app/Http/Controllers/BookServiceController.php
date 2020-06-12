<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BookServiceController extends Controller
{
    public function getTopBooks()
    {
        $books = Book::where(
            'display', true
        )
        ->inRandomOrder()
        ->take(3)
        ->get();

        return $books;
    }

    public function getBook(Book $book)
    {
        $checkedBook = Book::where([
            'id' => $book->id,
            'display' => true,
        ])
        ->firstOrFail();

        return $checkedBook;
    }

    public function getRelated(Book $book)
    {
        $books = Book::where([
            ['display', true],
            ['id', '<>', $book->id]

        ])

        ->inRandomOrder()
        ->take(3)
        ->get();
        return $books;
    }
}
