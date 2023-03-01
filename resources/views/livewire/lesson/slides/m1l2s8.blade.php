<div id="m1l2s8" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            AI is everywhere
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <section class="grid grid-cols-1 md:grid-cols-3 my-12 gap-y-8 md:gap-x-8">
            <div class="max-w-sm mx-auto bg-white h-full flex flex-col">
                <div>
                    <img class="max-h-24 md:max-h-32 mx-auto animate-left" src="{{ asset('images/course/books.png') }}"
                        alt="" />
                    <div class="relativ animate-left-slow">
                        <img class="w-max mt-5" src="{{ asset('images/course/yellow_down.png') }}" alt="">
                        <div class="absolute bottom-0 w-full h-3/4 items-end justify-center">
                            <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-white text-center">
                                Education </h5>
                        </div>
                    </div>
                </div>
                <div class="p-5 h-full flex flex-col justify-center bg-yellow-300 mt-4 rounded-xl animate-left-slow-2">
                    <p class="mb-3 text-white text-lg font-intelmedium text-center">Personalized education platforms and prospective
                        college suggestions</p>
                </div>
            </div>
            <div class="max-w-sm mx-auto bg-white h-full flex flex-col">
                <div>
                    <img class="max-h-24 md:max-h-32 mx-auto animate-top" src="{{ asset('images/course/social.png') }}"
                        alt="" />
                    <div class="relative animate-top-slow">
                        <img class="w-max mt-5" src="{{ asset('images/course/red_down.png') }}" alt="">
                        <div class="absolute bottom-0 w-full h-3/4 items-end justify-center">
                            <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-white text-center">
                                Social media </h5>
                        </div>
                    </div>
                </div>
                <div class="p-5 h-full flex flex-col justify-center mt-4 rounded-xl animate-top-slow-2" style="background-color: #ff758e;">
                    <p class="mb-3 text-white text-lg font-intelmedium text-center">Personalized social media content</p>
                </div>
            </div>
            <div class="max-w-sm mx-auto bg-white h-full flex flex-col">
                <div>
                    <img class="max-h-24 md:max-h-32 mx-auto animate-right" src="{{ asset('images/course/search.png') }}"
                        alt="" />
                    <div class="relative animate-right-slow">
                        <img class="w-max mt-5" src="{{ asset('images/course/blue_down.png') }}" alt="">
                        <div class="absolute bottom-0 w-full h-3/4 items-end justify-center">
                            <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-white text-center">
                                Job Search </h5>
                        </div>
                    </div>
                </div>
                <div class="p-5 h-full flex flex-col justify-center mt-4 rounded-xl animate-right-slow-2" style="background-color: #7785f2;">
                    <p class="mb-3 text-white text-lg font-intelmedium text-center">Job recommendations and recommended resume shortlisting</p>
                </div>
            </div>
        </section>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets learn about automation...
            </button>
        @else
        @endif
    </div>
</div>
