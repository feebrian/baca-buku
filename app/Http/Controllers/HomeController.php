<?php

namespace App\Http\Controllers;

use App\Models\Book;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $books = Book::all();
        $recentlyAddedBooks = Book::latest()->take(7)->get();
        // $recommendedBook = Book

        return view('home', [
            'recentlyAddedBooks' => $recentlyAddedBooks,
            'books' => $books,
        ]);
    }
}
