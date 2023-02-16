<div id="m1l2s6" class="{{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="text-gray-700 mt-8">
        <div class="grid grid-cols-3 gap-3">
            <div class="relative animate-top-fast">
                <img src="{{ asset('images/course/industry.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Industrial</p>
                </div>
            </div>
            <div class="relative animate-top">
                <img src="{{ asset('images/course/media.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Media</p>
                </div>
            </div>
            <div class="relative animate-top-slow">
                <img src="{{ asset('images/course/retail.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Retail</p>
                </div>
            </div>
            <div class="relative animate-top-fast">
                <img src="{{ asset('images/course/smart_home.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Smart Home</p>
                </div>
            </div>
            <div class="relative animate-top">
                <img src="{{ asset('images/course/telecom.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Telecom</p>
                </div>
            </div>
            <div class="relative animate-top-slow">
                <img src="{{ asset('images/course/transport.jpg') }}" alt="" class="w-full h-full max-h-72 object-cover">
                <div
                    class="absolute bottom-0 w-full h-1/2 bg-gradient-to-b from-transparent to-slate-400 flex items-end justify-center">
                    <p class="text-white font-intelmedium text-lg pb-2">Transport</p>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets learn how AI is used...
            </button>
        @else
        @endif
    </div>
</div>
