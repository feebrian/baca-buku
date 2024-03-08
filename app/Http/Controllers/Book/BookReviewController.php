<?php

namespace App\Http\Controllers\Book;

use App\Http\Controllers\Controller;
use App\Http\Requests\Book\BookReviewRequest;
use App\Models\Review;
use Illuminate\Http\Request;

class BookReviewController extends Controller
{
    public function writeReview(BookReviewRequest $request)
    {
        $reviewData = $request->validated();
        Review::create($reviewData);
        return back();
    }
}
