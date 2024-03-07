@extends('layouts.app-layout')

@section('content')
    <div class="container justify-center mx-auto">
        <div class="flex flex-col max-w-sm p-4 mx-auto lg:max-w-7xl md:max-w-3xl">
            <div class="flex flex-col justify-center mx-auto rounded-lg">
                <div class="flex justify-center w-full">
                    <img src="{{ asset('img/kaneki.jpg') }}" alt="" class="w-32 rounded-full shadow">
                </div>

                <span class="my-4 text-xl font-medium text-gray-800">adamadtm__</span>

                {{-- <p class="text-gray-600">
                    {{ Str::limit('Pecinta alam, buku dan sejenisnya', 60, '') }}
                </p> --}}

                <div class="flex items-center justify-center mt-4 space-x-2">
                    <a href="{{ route('profile.edit') }}"
                        class="px-4 py-2 text-sm font-medium bg-gray-300 rounded-full focus:bg-gray-400">Edit
                        Profil</a>
                    <a href="#"
                        class="px-4 py-2 text-sm font-medium bg-gray-300 rounded-full focus:bg-gray-400">Settings</a>
                </div>
            </div>

            <div class="p-4 mt-8 bg-white rounded-md">
                <div class="flex items-center justify-between">
                    <span class="text-base font-medium">Terakhir pinjam</span>
                    <a href="#" class="flex items-center text-sm font-medium">
                        <span>Next </span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-wrap lg:block lg:flex-nowrap lg:overflow-x-auto lg:whitespace-nowrap">
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-1.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-2.jpeg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                    </div>
                </div>
            </div>

            <div class="p-4 mt-8 bg-white rounded-md">
                <div class="flex items-center justify-between">
                    <span class="text-base font-medium">Belum Kembali</span>
                    <a href="#" class="flex items-center text-sm font-medium">Next <svg
                            xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                            stroke="currentColor" class="w-4 h-4">
                            <path stroke-linecap="round" stroke-linejoin="round" d="m8.25 4.5 7.5 7.5-7.5 7.5" />
                        </svg>
                    </a>
                </div>

                <div class="flex flex-wrap lg:block lg:flex-nowrap lg:overflow-x-auto lg:whitespace-nowrap">
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-1.jpg') }}" alt="" class="w-48 h-60">
                        <div class="flex items-center justify-between mt-1">
                            <div>
                                <span class="block text-sm font-semibold">Harus Kembali</span>
                                <span class="block text-sm italic">21 Februari 2006</span>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="p-2 bg-blue-500 rounded-full" title="Kembalikan buku">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-1.jpg') }}" alt="" class="w-48 h-60">
                        <div class="flex items-center justify-between mt-1">
                            <div>
                                <span class="block text-sm font-semibold">Harus Kembali</span>
                                <span class="block text-sm italic">21 Februari 2006</span>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="p-2 bg-blue-500 rounded-full" title="Kembalikan buku">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-2.jpeg') }}" alt="" class="w-48 h-60">
                        <div class="flex items-center justify-between mt-1">
                            <div>
                                <span class="block text-sm font-semibold">Harus Kembali</span>
                                <span class="block text-sm italic">21 Februari 2006</span>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="p-2 bg-blue-500 rounded-full" title="Kembalikan buku">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                        <div class="flex items-center justify-between mt-1">
                            <div>
                                <span class="block text-sm font-semibold">Harus Kembali</span>
                                <span class="block text-sm italic">21 Februari 2006</span>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="p-2 bg-blue-500 rounded-full" title="Kembalikan buku">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                        <img src="{{ asset('img/covers/cover-4.jpg') }}" alt="" class="w-48 h-60">
                        <div class="flex items-center justify-between mt-1">
                            <div>
                                <span class="block text-sm font-semibold">Harus Kembali</span>
                                <span class="block text-sm italic">21 Februari 2006</span>
                            </div>
                            <form action="#" method="post">
                                @csrf
                                @method('PUT')
                                <button type="submit" class="p-2 bg-blue-500 rounded-full" title="Kembalikan buku">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-5 h-5 text-white">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m20.25 7.5-.625 10.632a2.25 2.25 0 0 1-2.247 2.118H6.622a2.25 2.25 0 0 1-2.247-2.118L3.75 7.5m8.25 3v6.75m0 0-3-3m3 3 3-3M3.375 7.5h17.25c.621 0 1.125-.504 1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125Z" />
                                    </svg>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
