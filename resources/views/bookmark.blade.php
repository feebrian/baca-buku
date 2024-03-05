<x-app-layout>
    <div class="p-4 md:ml-64">
        <div class="container justify-center mx-auto">
            <div class="flex flex-col max-w-sm p-4 mx-auto lg:max-w-7xl md:max-w-3xl">
                <h1 class="text-xl font-semibold">Koleksi Buku</h1>

                <div class="p-4 my-2 bg-white rounded-md">
                    {{-- <div class="grid grid-cols-2 lg:grid-cols-6 place-items-center gap-y-2"> --}}
                    <div class="flex flex-wrap">
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
                            <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                        </div>
                        <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                            <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                        </div>
                        <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                            <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                        </div>
                        <div class="w-6/12 p-2 lg:w-2/12 lg:inline-block">
                            <img src="{{ asset('img/covers/cover-3.jpg') }}" alt="" class="w-48 h-60">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
