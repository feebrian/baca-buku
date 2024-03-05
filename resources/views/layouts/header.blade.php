<header class="flex items-center h-16 bg-white shadow md:ml-64">
    <div class="container flex items-center justify-between p-4 mx-auto">

        <div class="block cursor-pointer md:hidden">
            <svg class="w-6 h-6" stroke="currentColor" fill="none" viewBox="0 0 24 24">
                <path :class="{ 'hidden': open, 'inline-flex': !open }" class="inline-flex" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16" />
                <path :class="{ 'hidden': !open, 'inline-flex': open }" class="hidden" stroke-linecap="round"
                    stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12" />
            </svg>
        </div>

        <div class="relative hidden md:block">
            <div class="absolute inset-y-0 flex items-center ml-2">
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2"
                    stroke="currentColor" class="w-4 h-4">
                    <path stroke-linecap="round" stroke-linejoin="round"
                        d="m21 21-5.197-5.197m0 0A7.5 7.5 0 1 0 5.196 5.196a7.5 7.5 0 0 0 10.607 10.607Z" />
                </svg>
            </div>

            <input type="text" placeholder="Search"
                class="w-full py-2 pl-8 pr-4 border-gray-300 rounded-md shadow-sm focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50">

            <ul class="absolute hidden w-full p-2 rounded shadow-sm bg-gray-50">
                <li class="p-2 rounded hover:bg-gray-100"><a href="">aslkdfjs</a></li>
                <li class="p-2 rounded hover:bg-gray-100"><a href="">aslkdfjs</a></li>
                <li class="p-2 rounded hover:bg-gray-100"><a href="">aslkdfjs</a></li>
            </ul>
        </div>

        <div class="flex items-center space-x-4 select-none" x-data="{ profileDropdown: false }">
            {{-- <span class="hidden text-sm text-start md:block">adamadtm__</span> --}}
            <div class="relative">
                <img @click="profileDropdown = !profileDropdown" @click.away="profileDropdown = false"
                    src="{{ auth()->user()->profile_picture }}" alt="kaneki profile picture"
                    class="object-cover w-10 rounded-full cursor-pointer">

                <ul x-show="profileDropdown" x-cloak x-transition:enter="transition ease-out duration-150"
                    x-transition:enter-start="opacity-0 scale-90" x-transition:enter-end="opacity-100 scale-100"
                    x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90"
                    class="absolute right-0 p-2 rounded shadow top-full bg-gray-50">
                    <li class="p-2 text-sm rounded hover:bg-gray-100">
                        <a href="">link 1</a>
                    </li>
                    <li class="p-2 text-sm rounded hover:bg-gray-100">
                        <a href="">link 2</a>
                    </li>
                    <hr>
                    <li class="p-2 text-sm rounded hover:bg-gray-100">
                        <form action="{{ route('logout') }}" method="POST">
                            @csrf
                            <button type="submit" class="flex items-center gap-x-2">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="3" stroke="currentColor" class="w-4 h-4">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" />
                                </svg>
                                Logout
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
