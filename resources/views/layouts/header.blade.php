<header class="flex items-center h-16 bg-white shadow">
    <div class="container flex items-center justify-between p-4 mx-auto">

        <label for="side-nav" class="btn btn-square btn-sm btn-ghost drawer-button lg:hidden"><svg
                xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M3.75 6.75h16.5M3.75 12h16.5m-16.5 5.25h16.5" />
            </svg>
        </label>

        <div class="relative hidden md:block">
            <label class="flex items-center gap-2 input input-sm input-bordered">
                <input type="text" class="grow" placeholder="Search" />
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 16 16" fill="currentColor"
                    class="w-4 h-4 opacity-70">
                    <path fill-rule="evenodd"
                        d="M9.965 11.026a5 5 0 1 1 1.06-1.06l2.755 2.754a.75.75 0 1 1-1.06 1.06l-2.755-2.754ZM10.5 7a3.5 3.5 0 1 1-7 0 3.5 3.5 0 0 1 7 0Z"
                        clip-rule="evenodd" />
                </svg>
            </label>

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

                <ul class="absolute right-0 w-56 menu bg-base-200 rounded-box" x-show="profileDropdown" x-cloak
                    x-transition:enter="transition ease-out duration-150" x-transition:enter-start="opacity-0 scale-90"
                    x-transition:enter-end="opacity-100 scale-100" x-transition:leave="transition ease-in duration-150"
                    x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-90">
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6" />
                            </svg>
                            Item 2
                        </a>
                    </li>
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                            </svg>
                            Item 1
                        </a>
                    </li>
                    <li>
                        <a>
                            <svg xmlns="http://www.w3.org/2000/svg" class="w-5 h-5" fill="none" viewBox="0 0 24 24"
                                stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                    d="M9 19v-6a2 2 0 00-2-2H5a2 2 0 00-2 2v6a2 2 0 002 2h2a2 2 0 002-2zm0 0V9a2 2 0 012-2h2a2 2 0 012 2v10m-6 0a2 2 0 002 2h2a2 2 0 002-2m0 0V5a2 2 0 012-2h2a2 2 0 012 2v14a2 2 0 01-2 2h-2a2 2 0 01-2-2z" />
                            </svg>
                            Item 3
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
</header>
