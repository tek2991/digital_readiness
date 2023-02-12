<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 rounded">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('home') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="h-6 mr-3 sm:h-12" alt="Logo" />
        </a>
        <button data-collapse-toggle="navbar-default" type="button"
            class="inline-flex items-center p-2 ml-3 text-sm text-gray-500 rounded-lg md:hidden hover:bg-intelblue2 focus:outline-none focus:ring-2 focus:ring-intelblue2"
            aria-controls="navbar-default" aria-expanded="false">
            <span class="sr-only">Open main menu</span>
            <svg class="w-6 h-6 text-intelblue" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path fill-rule="evenodd"
                    d="M3 5a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 10a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1zM3 15a1 1 0 011-1h12a1 1 0 110 2H4a1 1 0 01-1-1z"
                    clip-rule="evenodd"></path>
            </svg>
        </button>
        <div class="hidden w-full md:block md:w-auto" id="navbar-default">
            <ul
                class="flex flex-col items-center p-4 pr-0 mt-4 border border-gray-200 rounded-lg bg-intelblue2 md:flex-row md:space-x-8 md:mt-0 text-base md:border-0 md:bg-white">
                @guest
                    <li>
                        <a href="{{ route('home') }}" class="block py-2 pl-3 pr-4 text-intelblue hover:underline"
                            aria-current="page">Home</a>
                    </li>
                    <li class="flex md:w-36 items-center justify-center"
                        onclick="Livewire.emit('openModal', 'student.login-modal')">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-intelblue">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="#"
                            class="block py-2 pl-1 pr-4 text-intelblue md:text-center md:hover:underline">Login</a>
                    </li>
                    <li onclick="Livewire.emit('openModal', 'student.register-modal')">
                        <a href="#"
                            class="block py-2 pl-3 pr-4 text-intelblue font-intelmedium md:bg-intelblue md:text-white md:w-36 md:text-center md:border md:rounded-full md:border-intelblue hover:underline hover:text-secondary">Register</a>
                    </li>
                @endguest
                @auth
                    <li>
                        <a href="{{ route('course') }}"
                            class="block py-2 pl-3 pr-4 text-intelblue hover:underline">Course</a>
                    </li>
                    <li class="flex md:w-36 items-center justify-center" id="dropdownHoverButton"
                        data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-intelblue">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="#" class="block py-2 pl-1 pr-4 text-intelblue md:text-center md:hover:underline">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <!-- Profile dropdown -->
                    <div id="dropdownHover"
                        class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44 dark:bg-gray-700">
                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#"
                                    class="block px-4 py-2 hover:bg-gray-100 text-center">Profile</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 w-full">Sign out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
</nav>
