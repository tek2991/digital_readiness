<div id="m1l2s4" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            AI is everywhere
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="grid grid-cols-3 gap-3">
            <div class="relative animate-top-fast">
                <img src="{{ asset('images/course/agriculture.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Agriculture</p>
                </div>
            </div>
            <div class="relative animate-top">
                <img src="{{ asset('images/course/energy.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Energy</p>
                </div>
            </div>
            <div class="relative animate-top-slow">
                <img src="{{ asset('images/course/education.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Education</p>
                </div>
            </div>
            <div class="relative animate-top-fast">
                <img src="{{ asset('images/course/government.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Government</p>
                </div>
            </div>
            <div class="relative animate-top">
                <img src="{{ asset('images/course/finance.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Finance</p>
                </div>
            </div>
            <div class="relative animate-top-slow">
                <img src="{{ asset('images/course/health.jpg') }}" alt=""
                    class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Health</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Lets look at some more example...
                </button>
            </div>
        @else
        @endif
    </div>
</div>
