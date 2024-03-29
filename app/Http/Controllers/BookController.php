<?php

namespace App\Http\Controllers;

use App\Http\Requests\Book\StoreBookRequest;
use App\Http\Requests\Book\UpdateBookRequest;
use App\Models\Book;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Str;

class BookController extends Controller
{
    public function index()
    {
        $books = Book::all();
        // $recentlyAddedBooks = Book::latest()->take(5);

        return view('pages.admin.books.index', [
            // 'recentlyAddedBooks' => $recentlyAddedBooks->all(),
            'books' => $books,
        ]);
    }

    public function create()
    {
        $categories = Category::all();

        return view('pages.admin.books.create', [
            'categories' => $categories,
        ]);
    }

    public function store(StoreBookRequest $request)
    {
        $bookData = $request->validated();

        $bookCoverfile = $this->saveFile($request);

        $bookData['cover'] = $bookCoverfile;
        $bookData['slug'] = Str::of($request->title)->slug('-');

        $book = Book::create($bookData);

        $book->categories()->attach($bookData['category_id']);

        return redirect(route('admin.books.index'))
            ->with('success', 'Book created successfully');
    }

    public function show(string $slug)
    {
        $book = Book::where('slug', $slug)->first();
        $bookOnCollection;

        $book_id = $book->id;
        $user_id = auth()->user()->id;

        $isSaved = User::find($user_id)->books()
            ->where('book_id', $book_id)
            ->first();

        return view('book-detail', [
            'book' => $book,
            'bookOnCollection' => ($isSaved ? $bookOnCollection = true : $bookOnCollection = false),
        ]);
    }

    public function edit(string $slug)
    {
        $book = Book::where('slug', $slug)->first();

        return view('pages.admin.books.edit', [
            'book' => $book,
        ]);
    }

    public function update(UpdateBookRequest $request, $slug)
    {
        $bookUpdateData = $request->validated();

        $book = Book::where('slug', $slug)->first();

        $book->title = $bookUpdateData['title'];
        $book->writer = $bookUpdateData['writer'];
        $book->publisher = $bookUpdateData['publisher'];
        $book->publication_year = $bookUpdateData['publication_year'];
        $book->synopsis = $bookUpdateData['synopsis'];
        $book->stock = $bookUpdateData['stock'];
        $book->title = $bookUpdateData['title'];

        if ($request->file('cover')) {
            unlink(public_path('storage/covers/' . $book->cover));

            $bookCoverfile = $this->saveFile($request);;

            $book->cover = $bookCoverfile;
        } else {
            $book->cover = $bookUpdateData['old_book_cover'];
        }

        $book->save();

        return redirect(route('admin.books.index'));
    }

    public function destroy(string $slug)
    {
        $book = Book::where('slug', $slug)->first();

        $book->delete();

        unlink(public_path('storage/covers/' . $book->cover));

        return back();
    }

    private function saveFile($request)
    {
        $filePath = $request->file('cover')->store('public/covers');

        $filename = explode('/', $filePath)[2];

        return $filename;
    }
}
