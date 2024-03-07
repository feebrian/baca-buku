@extends('layouts.app-layout')

@section('content')
    <div class="container justify-center mx-auto">

        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
            class="w-8 h-8 mb-2 cursor-pointer" onclick="return location.href='/home'">
            <path stroke-linecap="round" stroke-linejoin="round"
                d="m11.25 9-3 3m0 0 3 3m-3-3h7.5M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
        </svg>

        <div class="flex flex-col max-w-sm mx-auto p -4 lg:max-w-7xl md:max-w-3xl md:flex-row">
            <div class="flex flex-col place-items-center ">
                <img src="{{ asset('storage/covers/' . $book->cover) }}" alt="" class="w-40">
                <span class="mt-2 font-semibold">{{ $book->title }}</span>
                <span>by
                    <span class="text-sm font-semibold text-gray-700">{{ $book->writer }}</span>
                </span>

                <div class="flex items-center mt-1">
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#94a3b8" viewBox="0 0 24 24" stroke-width="0"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#94a3b8" viewBox="0 0 24 24" stroke-width="0"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#94a3b8" viewBox="0 0 24 24" stroke-width="0"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#94a3b8" viewBox="0 0 24 24" stroke-width="0"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="#94a3b8" viewBox="0 0 24 24" stroke-width="0"
                        stroke="currentColor" class="w-5 h-5">
                        <path stroke-linecap="round" stroke-linejoin="round"
                            d="M11.48 3.499a.562.562 0 0 1 1.04 0l2.125 5.111a.563.563 0 0 0 .475.345l5.518.442c.499.04.701.663.321.988l-4.204 3.602a.563.563 0 0 0-.182.557l1.285 5.385a.562.562 0 0 1-.84.61l-4.725-2.885a.562.562 0 0 0-.586 0L6.982 20.54a.562.562 0 0 1-.84-.61l1.285-5.386a.562.562 0 0 0-.182-.557l-4.204-3.602a.562.562 0 0 1 .321-.988l5.518-.442a.563.563 0 0 0 .475-.345L11.48 3.5Z" />
                    </svg>
                    <span class="text-sm">(12)</span>
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
                    <form action="{{ route('collections.save') }}" method="post">
                        @csrf
                        <input type="hidden" name="book_id" value="{{ $book->id }}">
                        <input type="hidden" name="user_id" value="{{ auth()->user()->id }}">

                        <button class="btn btn-neutral no-animation">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5M10 11.25h4M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                            </svg>
                            Simpan
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
                        <input type="radio" value="1" name="rating" class="bg-orange-400 mask mask-star-2" />
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


    </div>

    <script>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .catch(error => {
                console.error(error);
            });
    </script>
@endsection
