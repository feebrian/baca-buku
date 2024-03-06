@extends('layouts.admin-layout')

@section('content')
    <div class="w-full">
        <form action="{{ route('admin.books.update', ['slug' => $book->slug]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')

            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Title</span>
                </div>
                <input type="text" name="title" value="{{ $book->title }}" placeholder="Type here"
                    class="w-full input input-bordered" />
            </label>
            <div class="md:items-center md:space-x-4 md:flex">
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Writer</span>
                    </div>
                    <input type="text" name="writer" value="{{ $book->writer }}" placeholder="Type here"
                        class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Publisher</span>
                    </div>
                    <input type="text" name="publisher" value="{{ $book->publisher }}" placeholder="Type here"
                        class="w-full input input-bordered" />
                </label>
            </div>
            <div class="md:items-center md:space-x-4 md:flex">
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Publication Year</span>
                    </div>
                    <input type="text" name="publication_year" value="{{ $book->publication_year }}"
                        placeholder="Type here" class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Stock</span>
                    </div>
                    <input type="number" name="stock" value="{{ $book->stock }}" placeholder="Type here"
                        class="w-full input input-bordered" />
                </label>
            </div>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Cover</span>
                </div>
                <input type="file" name="cover" value="" class="w-full file-input file-input-bordered" />
            </label>
            <input type="hidden" name="old_book_cover" value="{{ $book->cover }}">
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Synopsis</span>
                </div>
                <textarea name="synopsis" id="editor">
                    {{ $book->synopsis }}
                </textarea>
            </label>

            <button type="submit" class="mt-2 font-bold btn btn-neutral">Submit</button>
        </form>
    </div>
@endsection
