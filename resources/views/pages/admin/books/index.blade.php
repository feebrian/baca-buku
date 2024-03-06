@extends('layouts.admin-layout')

@section('content')
    <div class="overflow-x-auto">
        <table class="table">
            <!-- head -->
            <thead>
                <tr>
                    <th>#</th>
                    <th>Title</th>
                    <th>Writer</th>
                    <th>Publisher</th>
                    <th>Publication Year</th>
                    <th>Stock</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($books as $b)
                    <tr>
                        <td>
                            <div class="w-12 ">
                                <img src="{{ asset('storage/covers/' . $b->cover) }}" alt="Avatar Tailwind CSS Component" />
                            </div>
                        </td>
                        <td>{{ $b->title }}</td>
                        <td>{{ $b->writer }}</td>
                        <td>{{ $b->publisher }}</td>
                        <td>{{ $b->publication_year }}</td>
                        <td>{{ $b->stock }}</td>
                        <td>
                            <div class="flex items-center space-x-2">
                                <button type="button" class="btn btn-sm btn-info"
                                    onclick="book_modal_{{ $b->id }}.showModal()">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M2.036 12.322a1.012 1.012 0 0 1 0-.639C3.423 7.51 7.36 4.5 12 4.5c4.638 0 8.573 3.007 9.963 7.178.07.207.07.431 0 .639C20.577 16.49 16.64 19.5 12 19.5c-4.638 0-8.573-3.007-9.963-7.178Z" />
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" />
                                    </svg>
                                </button>

                                <a href="{{ route('admin.books.edit', ['slug' => $b->slug]) }}"
                                    class="btn btn-sm btn-warning">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="m16.862 4.487 1.687-1.688a1.875 1.875 0 1 1 2.652 2.652L10.582 16.07a4.5 4.5 0 0 1-1.897 1.13L6 18l.8-2.685a4.5 4.5 0 0 1 1.13-1.897l8.932-8.931Zm0 0L19.5 7.125M18 14v4.75A2.25 2.25 0 0 1 15.75 21H5.25A2.25 2.25 0 0 1 3 18.75V8.25A2.25 2.25 0 0 1 5.25 6H10" />
                                    </svg>
                                </a>

                                <form action="{{ route('admin.books.destroy', ['slug' => $b->slug]) }}" method="POST">
                                    @csrf
                                    @method('DELETE')

                                    <button type="submit" onclick="return confirm('Yakin mau delete?')"
                                        class="btn btn-sm btn-error">
                                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                            stroke-width="2" stroke="currentColor" class="w-4 h-4">
                                            <path stroke-linecap="round" stroke-linejoin="round"
                                                d="m14.74 9-.346 9m-4.788 0L9.26 9m9.968-3.21c.342.052.682.107 1.022.166m-1.022-.165L18.16 19.673a2.25 2.25 0 0 1-2.244 2.077H8.084a2.25 2.25 0 0 1-2.244-2.077L4.772 5.79m14.456 0a48.108 48.108 0 0 0-3.478-.397m-12 .562c.34-.059.68-.114 1.022-.165m0 0a48.11 48.11 0 0 1 3.478-.397m7.5 0v-.916c0-1.18-.91-2.164-2.09-2.201a51.964 51.964 0 0 0-3.32 0c-1.18.037-2.09 1.022-2.09 2.201v.916m7.5 0a48.667 48.667 0 0 0-7.5 0" />
                                        </svg>
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>

                    <dialog id="book_modal_{{ $b->id }}" class="modal modal-bottom sm:modal-middle">
                        <div class="modal-box">
                            <h3 class="text-lg font-bold">Buku {{ $b->title }}</h3>
                            <p class="py-4">Press ESC key or click the button below to close</p>
                            <div class="modal-action">
                                <form method="dialog">
                                    <!-- if there is a button in form, it will close the modal -->
                                    <button class="btn">Close</button>
                                </form>
                            </div>
                        </div>
                    </dialog>
                @endforeach
        </table>
    </div>
@endsection










{{-- <!-- Open the modal using ID.showModal() method -->
<button class="btn" onclick="my_modal_5.showModal()">open modal</button>
<dialog id="my_modal_5" class="modal modal-bottom sm:modal-middle">
    <div class="modal-box">
        <h3 class="text-lg font-bold">Hello!</h3>
        <p class="py-4">Press ESC key or click the button below to close</p>
        <div class="modal-action">
            <form method="dialog">
                <!-- if there is a button in form, it will close the modal -->
                <button class="btn">Close</button>
            </form>
        </div>
    </div>
</dialog> --}}
