<?php

namespace App\Helpers;

use App\Models\Book;

class BookHelpers
{
    private function getBook(?string $slug)
    {
        if (!$slug) {
            $books = Book::all();

            return $books;
        }

        if ($slug) {
            $book = Book::where('slug', $slug)->first();

            return $book;
        }
    }

    public function countBookRatings($slug)
    {
        $book = $this->getBook($slug);

        $book->reviews->rating
    }
}
