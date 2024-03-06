@extends('layouts.admin-layout')

@section('content')
    <div class="w-full">
        <form action="{{ route('admin.books.store') }}" method="post" enctype="multipart/form-data">
            @csrf
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Title</span>
                </div>
                <input type="text" name="title" placeholder="Type here" class="w-full input input-bordered" />
            </label>
            <div class="md:items-center md:space-x-4 md:flex">
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Writer</span>
                    </div>
                    <input type="text" name="writer" placeholder="Type here" class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Publisher</span>
                    </div>
                    <input type="text" name="publisher" placeholder="Type here" class="w-full input input-bordered" />
                </label>
            </div>
            <div class="md:items-center md:space-x-4 md:flex">
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Publication Year</span>
                    </div>
                    <input type="text" name="publication_year" placeholder="Type here"
                        class="w-full input input-bordered" />
                </label>
                <label class="w-full form-control">
                    <div class="label">
                        <span class="label-text">Book Stock</span>
                    </div>
                    <input type="number" name="stock" placeholder="Type here" class="w-full input input-bordered" />
                </label>
            </div>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Cover</span>
                </div>
                <input type="file" name="cover" class="w-full file-input file-input-bordered" />
            </label>
            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Book Synopsis</span>
                </div>
                <textarea name="synopsis" id="editor">
            </textarea>
            </label>
            <button type="submit" class="mt-2 font-bold btn btn-neutral">Submit</button>
        </form>
    </div>
@endsection
