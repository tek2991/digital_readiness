<div id="m3l3s7" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }} flex flex-col justify-between">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">AI Project Cycle</h1>
    </div>
    <div class="text-gray-700 my-14" wire:ignore>
        <div class="grid grid-cols-6">
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7"
                wire:click="openModal(1)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Problem Scoping
                </p>
            </div>
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7 col-start-3"
                wire:click="openModal(2)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Data Aquisition
                </p>
            </div>
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7 col-start-5"
                wire:click="openModal(3)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Evaluate
                </p>
            </div>
        </div>
        <div class="grid grid-cols-6 -translate-x-6 -translate-y-1 lg:-translate-y-3 xl:-translate-y-6">
            <div class="col-start-2">
                <img src="{{ asset('images/course/lower_right.png') }}" alt="" class="max-h-6 xl:max-h-10">
            </div>
            <div>
                <img src="{{ asset('images/course/upper_right.png') }}" alt="" class="max-h-6 xl:max-h-10">
            </div>
            <div>
                <img src="{{ asset('images/course/lower_right.png') }}" alt="" class="max-h-6 xl:max-h-10">
            </div>
            <div>
                <img src="{{ asset('images/course/upper_right.png') }}" alt="" class="max-h-6 xl:max-h-10">
            </div>
            <div>
                <img src="{{ asset('images/course/lower_right.png') }}" alt="" class="max-h-6 xl:max-h-10">
            </div>
        </div>
        <div class="grid grid-cols-6 -translate-y-2 lg:-translate-y-4 xl:-translate-y-8">
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7 col-start-2"
                wire:click="openModal(4)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Problem Scoping
                </p>
            </div>
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7 col-start-4"
                wire:click="openModal(5)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Data Aquisition
                </p>
            </div>
            <div class="bg-green-400 cursor-pointer hover:animate-pulse rounded-full flex justify-center items-center dynamic-height-m3l3s7 col-start-6"
                wire:click="openModal(6)">
                <p class="text-xs text-center leading-3 md:text-sm xl:text-xl text-white font-intelmedium">
                    Evaluate
                </p>
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

    <script>
        function adjustHeight() {
            var elements = document.querySelectorAll(".dynamic-height-m3l3s7");
            elements.forEach(function(element) {
                var width = element.offsetWidth;
                element.style.height = width + "px";
            });
        }

        document.addEventListener("DOMContentLoaded", adjustHeight);
        window.addEventListener("resize", adjustHeight);
        // call adjustHeight
        setTimeout(adjustHeight, 100);
    </script>
</div>
