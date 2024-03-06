@extends('layouts.admin-layout')

@section('content')
    <div class="w-full">
        <form action="{{ route('admin.category.update', ['slug' => $category->slug]) }}" method="post">
            @csrf
            @method('PUT')

            <label class="w-full form-control">
                <div class="label">
                    <span class="label-text">Category names</span>
                </div>
                <input type="text" name="name" placeholder="Type here" value="{{ $category->name }}"
                    class="w-full input input-bordered" />
            </label>
            <button type="submit" class="mt-2 uppercase btn btn-neutral">Submit</button>
        </form>
    </div>
@endsection
