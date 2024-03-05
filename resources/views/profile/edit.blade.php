<x-app-layout>
    <div class="p-4 md:ml-64">
        <div class="container justify-center mx-auto">
            <div class="flex flex-col max-w-sm p-4 mx-auto lg:max-w-7xl md:max-w-3xl">

                {{-- profile picture --}}
                <form action="#" method="post">
                    <div class="flex justify-center">
                        <img src="{{ asset('img/kaneki.jpg') }}" alt="" class="w-32 rounded-full shadow">
                    </div>
                    <div class="flex gap-x-4">
                        <label class="inline-block w-full mt-4">
                            <span class="text-gray-700">Nama depan</span>
                            <input type="text"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </label>
                        <label class="inline-block w-full mt-4">
                            <span class="text-gray-700">Nama Belakang</span>
                            <input type="text"
                                class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                        </label>
                    </div>
                    <label class="block mt-4 ">
                        <span class="text-gray-700">Username</span>
                        <input type="text"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">
                    </label>
                    <label class="block mt-4">
                        <span class="text-gray-700">Tentang</span>
                        <textarea type="text"
                            class="block w-full mt-1 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50"></textarea>
                    </label>

                    <button type="submit" class="px-4 py-2 mt-2 bg-blue-500 rounded ">Save</button>
                </form>

            </div>
        </div>
    </div>
</x-app-layout>
