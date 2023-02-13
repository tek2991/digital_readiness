<nav class="bg-white border-gray-200 px-2 sm:px-4 py-2.5 fixed w-full z-50">
    <div class="container flex flex-wrap items-center justify-between mx-auto">
        <a href="{{ route('course') }}" class="flex items-center">
            <img src="{{ asset('images/logo.png') }}" class="h-8 mr-3 sm:h-12" alt="Logo" />
        </a>
        <div class="w-auto block" id="navbar-default">
            <ul class="flex items-center p-1 md:pl-4 md:py-4 pr-0 rounded-lg flex-row space-x-8 mt-0 text-base">
                @auth
                    <li class="flex md:w-36 items-center justify-end" id="dropdownHoverButton"
                        data-dropdown-toggle="dropdownHover" data-dropdown-trigger="hover">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor"
                            class="w-5 h-5 text-intelblue">
                            <path fill-rule="evenodd"
                                d="M18.685 19.097A9.723 9.723 0 0021.75 12c0-5.385-4.365-9.75-9.75-9.75S2.25 6.615 2.25 12a9.723 9.723 0 003.065 7.097A9.716 9.716 0 0012 21.75a9.716 9.716 0 006.685-2.653zm-12.54-1.285A7.486 7.486 0 0112 15a7.486 7.486 0 015.855 2.812A8.224 8.224 0 0112 20.25a8.224 8.224 0 01-5.855-2.438zM15.75 9a3.75 3.75 0 11-7.5 0 3.75 3.75 0 017.5 0z"
                                clip-rule="evenodd" />
                        </svg>
                        <a href="#" class="block py-2 pl-1 pr-0 text-intelblue md:text-center md:hover:underline">
                            {{ Auth::user()->name }}
                        </a>
                    </li>
                    <!-- Profile dropdown -->
                    <div id="dropdownHover" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow w-44">
                        <ul class="py-2 text-sm text-gray-700" aria-labelledby="dropdownHoverButton">
                            <li>
                                <a href="#" class="block px-4 py-2 hover:bg-gray-100 text-center">Profile</a>
                            </li>
                            <li>
                                <form action="{{ route('logout') }}" method="POST">
                                    @csrf
                                    <button type="submit"
                                        class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 w-full">Sign
                                        out</button>
                                </form>
                            </li>
                        </ul>
                    </div>
                @endauth
            </ul>
        </div>
    </div>
    <div class="container flex flex-wrap items-center justify-between mx-auto border-t mt-2">
        <button data-drawer-target="sidebar-multi-level-sidebar" data-drawer-toggle="sidebar-multi-level-sidebar"
            aria-controls="sidebar-multi-level-sidebar" type="button"
            class="inline-flex items-center p-2 mt-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200">
            <span class="sr-only">Open sidebar</span>
            <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                xmlns="http://www.w3.org/2000/svg">
                <path clip-rule="evenodd" fill-rule="evenodd"
                    d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                </path>
            </svg>
        </button>
    </div>
</nav>
