<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\BookReviewRequest;
use App\Models\BookReview;
use Illuminate\Http\Request;

class BookReviewController extends Controller
{
    public function writeReview(BookReviewRequest $request)
    {
        $reviewData = $request->validated();
        BookReview::create($reviewData);
        return back();
    }
}
