@extends('layouts.app-layout')

@section('content')
    <div class="container justify-center mx-auto">
        <div class="flex flex-col max-w-sm p-4 mx-auto lg:max-w-7xl md:max-w-3xl md:flex-row">
            <div class="flex flex-col place-items-center md:place-items-start">
                <img src="{{ asset('storage/covers/' . $book->cover) }}" alt="" class="w-40">
                <span class="mt-2 font-semibold">{{ $book->title }}</span>
                <span>by
                    <span class="text-sm font-semibold text-gray-700">{{ $book->writer }}</span>
                </span>

                <div class="flex items-center mt-1">
                    <div class="relative">
                        <div class="flex">
                            @for ($i = 0; $i < 5; $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#b0b0b0" class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endfor
                        </div>

                        <div class="absolute top-0 flex">
                            @for ($i = 1; $i < round($book->rating, PHP_ROUND_HALF_DOWN); $i++)
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="#fb923c" class="w-4 h-4">
                                    <path fill-rule="evenodd"
                                        d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z"
                                        clip-rule="evenodd" />
                                </svg>
                            @endfor
                        </div>
                    </div>
                    <span class="text-sm">({{ App\Models\Review::where('book_id', $book->id)->count() }})</span>
                </div>
            </div>

            <div class="flex flex-col md:ml-4">

                <div class="mt-4 text-sm md:mt-0">
                    {!! $book->synopsis !!}
                </div>

                <div class="divider"></div>

                <div class="flex flex-row space-x-4">
                    <div class="flex flex-col space-y-1">
                        <span class="text-sm font-medium">Judul</span>
                        <span class="text-sm font-medium">Penulis</span>
                        <span class="text-sm font-medium">Penerbit</span>
                        <span class="text-sm font-medium">Tahun Terbit</span>
                        <span class="text-sm font-medium">Kategori</span>
                        <span class="text-sm font-medium">Rating</span>
                        <span class="text-sm font-medium">Stok</span>
                    </div>
                    <div class="flex flex-col space-y-1">
                        <span class="text-sm font-normal">{{ $book->title }}</span>
                        <span class="text-sm font-normal">{{ $book->writer }}</span>
                        <span class="text-sm font-normal">{{ $book->publisher }}</span>
                        <span class="text-sm font-normal">{{ $book->publication_year }}</span>
                        <span class="text-sm font-normal">
                            @foreach ($book->categories as $c)
                                {{ $c->name }}
                            @endforeach
                        </span>
                        <span class="text-sm font-normal">{{ $book->rating }} / 5</span>
                        <span class="text-sm font-normal">{{ $book->stock }}</span>
                    </div>
                </div>

                <div class="flex items-center mt-4 space-x-2 ">
                    <form action="{{ route('loan.perform') }}" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <button class="btn btn-neutral no-animation">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                                stroke="currentColor" class="w-5 h-5">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d=" M12 6.042A8.967 8.967 0 0 0 6 3.75c-1.052 0-2.062.18-3 .512v14.25A8.987 8.987 0 0 1 6 18c2.305 0 4.408.867 6 2.292m0-14.25a8.966 8.966 0 0 1 6-2.292c1.052 0 2.062.18 3 .512v14.25A8.987 8.987 0 00 18 18a8.967 8.967 0 0 0-6 2.292m0-14.25v14.25" />
                            </svg>
                            Pinjam
                        </button>
                    </form>
                    <form
                        action="@if ($bookOnCollection) {{ route('collections.delete') }} @else {{ route('collections.save') }} @endif"
                        method="post">
                        @csrf
                        @if ($bookOnCollection)
                            @method('DELETE')
                        @endif
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <button
                            class="btn btn-neutral no-animation @if ($bookOnCollection) btn-error text-white @endif">
                            @if ($bookOnCollection)
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m6 4.125 2.25 2.25m0 0 2.25 2.25M12 13.875l2.25-2.25M12 13.875l-2.25 2.25M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>
                            @else
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                </svg>
                            @endif
                        </button>
                    </form>


                </div>
            </div>

        </div>


        <div class="flex items-center mt-4 space-x-2">
            <div class="avatar">
                <div class="w-8 rounded-full">
                    <img src="{{ auth()->user()->profile_picture }}" />
                </div>
            </div>
            <form action="{{ route('review.perform') }}" method="POST" class="w-full">
                @csrf
                <input type="hidden" name="book_id" value="{{ $book->id }}">
                <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">
                <textarea placeholder="Text here" name="review" class="w-full textarea textarea-bordered textarea-sm"></textarea>
                <div class="flex items-center justify-between mt-1">
                    <div class="rating rating-sm">
                        <input type="radio" value="1" name="rating" class="bg-orange-400 mask mask-star-2"
                            checked />
                        <input type="radio" value="2" name="rating" class="bg-orange-400 mask mask-star-2" />
                        <input type="radio" value="3" name="rating" class="bg-orange-400 mask mask-star-2" />
                        <input type="radio" value="4" name="rating" class="bg-orange-400 mask mask-star-2" />
                        <input type="radio" value="5" name="rating" class="bg-orange-400 mask mask-star-2" />
                    </div>
                    <button class="btn btn-neutral btn-sm">Send</button>
                </div>
            </form>
        </div>
        <span class="mt-4 text-base font-semibold">Review</span>
        @foreach ($book->reviews as $r)
            <div class="flex flex-col mb-2">
                <span class="text-sm font-semibold ">{{ $r->users->username }}</span>
                <span>{{ $r->review }}</span>
            </div>
        @endforeach


    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
