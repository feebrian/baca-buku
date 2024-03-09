<?php

namespace App\Http\Controllers;

use App\Http\Requests\Collection\RemoveBookFromCollectionRequest;
use App\Http\Requests\Collection\SaveBookToCollectionRequest;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class CollectionController extends Controller
{
    public function index()
    {
        $user = User::find(auth()->user()->id);

        return view('bookmark', [
            'user' => $user,
        ]);
    }

    public function saveBookToCollection(SaveBookToCollectionRequest $request)
    {
        $collectionData = $request->validated();

        $user = User::find($collectionData['user_id']);
        $user->books()->attach($collectionData['book_id']);

        return redirect(route('collections.show'));
    }

    public function removeBookFromCollection(RemoveBookFromCollectionRequest $request)
    {
        $collectionData = $request->validated();

        $user = User::find($collectionData['user_id']);
        $user->books()->detach($collectionData['book_id']);

        return redirect(route('collections.show'));
    }
}
