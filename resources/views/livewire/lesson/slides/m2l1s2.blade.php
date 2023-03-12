<div id="m2l1s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">How does AI make a Decision?</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">If you want to go to the park, how do you make your
            decision?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="my-12 w-full grid grid-cols-1 xl:grid-cols-9 gap-4">
            <section class="xl:col-span-6 grid grid-cols-2 gap-6">
                <div
                    class="max-w-xs w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col relative animate-left-slow">
                    <img class="rounded-t-lg object-scale-down mx-auto w-full max-h-56"
                        src="{{ asset('images/course/man_in_raincoat.png') }}" alt="" />
                    <div class="px-5 py-2 h-full w-full flex justify-center items-center">
                        <h5 class="mb-2 text-lg text-center font-intelmedium tracking-tight text-gray-900">
                            Do I have a jacket?
                        </h5>
                    </div>

                    @if ($part2)
                        <h3
                            class="absolute top-4 left-4 bg-intelblue text-white text-lg font-intelmedium p-3 rounded-full animate-opacity">
                            3rd
                        </h3>
                    @endif
                </div>
                <div
                    class="max-w-xs w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col relative animate-left">
                    <img class="rounded-t-lg object-scale-down mx-auto w-full max-h-56"
                        src="{{ asset('images/course/umbrella.png') }}" alt="" />
                    <div class="px-5 py-2 h-full w-full flex justify-center items-center">
                        <h5 class="mb-2 text-lg text-center font-intelmedium tracking-tight text-gray-900">
                            Do I have an umbrella?
                        </h5>
                    </div>
                    @if ($part2)
                        <h3
                            class="absolute top-4 left-4 bg-intelblue text-white text-lg font-intelmedium p-3 rounded-full animate-opacity">
                            4th
                        </h3>
                    @endif
                </div>
                <div
                    class="max-w-xs w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col relative animate-left-slow-2">
                    <img class="rounded-t-lg object-scale-down mx-auto w-full max-h-56"
                        src="{{ asset('images/course/sunny_park.png') }}" alt="" />
                    <div class="px-5 py-2 h-full w-full flex justify-center items-center">
                        <h5 class="mb-2 text-lg text-center font-intelmedium tracking-tight text-gray-900">
                            Is it raining now?
                        </h5>
                    </div>

                    @if ($part2)
                        <h3
                            class="absolute top-4 left-4 bg-intelblue text-white text-lg font-intelmedium p-3 rounded-full animate-opacity">
                            1st &nbsp;
                        </h3>
                    @endif

                </div>
                <div
                    class="max-w-xs w-full mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col relative animate-left-slow">
                    <img class="rounded-t-lg object-scale-down mx-auto w-full max-h-56"
                        src="{{ asset('images/course/park.png') }}" alt="" />
                    <div class="px-5 py-2 h-full w-full flex justify-center items-center">
                        <h5 class="mb-2 text-lg text-center font-intelmedium tracking-tight text-gray-900">
                            What is the weather forecast for later?
                        </h5>
                    </div>

                    @if ($part2)
                        <h3
                            class="absolute top-4 left-4 bg-intelblue text-white text-lg font-intelmedium p-3 rounded-full animate-opacity">
                            2nd
                        </h3>
                    @endif
                </div>
            </section>
            <div class="xl:col-span-3 grid grid-cols-2 xl:grid-cols-1">
                <ul class="">
                    <li class="mb-2.5 animate-right-fast">
                        <span class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            Most of us would want to avoid getting soaked in the rain.
                        </span>
                    </li>
                    <li class="mb-2.5 animate-right">
                        <span class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            The first question you may ask is, “Should I bring a rain jacket?”
                        </span>
                    </li>
                    <li class="mb-2.5 animate-right">
                        <span class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            Then, you may also ask, “Should I bring an umbrella?”
                        </span>
                    </li>
                    <li class="mb-2.5 animate-right-slow">
                        <span class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            Or you may also ask, “What is the weather now?”
                        </span>
                    </li>
                    <li class="mb-2.5 animate-right-slow-2">
                        <span class="inline-flex">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                <path stroke-linecap="round" stroke-linejoin="round"
                                    d="M4.26 10.147a60.436 60.436 0 00-.491 6.347A48.627 48.627 0 0112 20.904a48.627 48.627 0 018.232-4.41 60.46 60.46 0 00-.491-6.347m-15.482 0a50.57 50.57 0 00-2.658-.813A59.905 59.905 0 0112 3.493a59.902 59.902 0 0110.399 5.84c-.896.248-1.783.52-2.658.814m-15.482 0A50.697 50.697 0 0112 13.489a50.702 50.702 0 017.74-3.342M6.75 15a.75.75 0 100-1.5.75.75 0 000 1.5zm0 0v-3.675A55.378 55.378 0 0112 8.443m-7.007 11.55A5.981 5.981 0 006.75 15.75v-1.5" />
                            </svg>
                            And finally, “What will the weather be like, later in the day?”
                        </span>
                    </li>
                </ul>
                @if ($part2)
                    <ul class="bg-intelblue2 rounded-lg animate-left">
                        <li class="mb-2.5">
                            <div class="p-4 flex justify-between">
                                <span class="w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>

                                <p class="ml-2">
                                    Now, you have the factors that will influence your decision to go out.
                                    But take note, not all factors are equal. Some factors are more important, while
                                    some
                                    are not.
                                </p>
                            </div>
                        </li>
                        <li class="mb-2.5">
                            <div class="p-4 flex justify-between">
                                <span class="w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>

                                <p class="ml-2">
                                    “is it sunny now” is more important than “the weather forecast later”.
                                </p>
                            </div>
                        </li>
                        <li class="mb-2.5">
                            <div class="p-4 flex justify-between">
                                <span class="w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>

                                <p class="ml-2">
                                    And “having a jacket” is more important than “having an umbrella.
                                </p>
                            </div>
                        </li>
                        <li class="mb-2.5">
                            <div class="p-4 flex justify-between items-center">
                                <span class="w-4 flex items-center">
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-600">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M9 12.75L11.25 15 15 9.75M21 12a9 9 0 11-18 0 9 9 0 0118 0z" />
                                    </svg>
                                </span>

                                <p class="ml-2">
                                    We can put the ranking for this example.
                                </p>
                            </div>
                        </li>
                    </ul>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                    class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    {{ $complete == true ? 'Continue...' : 'Please complete the slide above' }}
                </button>
            </div>
        @else
        @endif
    </div>
</div>
