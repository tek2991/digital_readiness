<div id="m1l2s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            What are AI's capabilities?
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div>
            <section class="grid grid-cols-2 gap-4 md:gap-12">
                <div class="w-full max-w-xs mx-auto dynamic-height-m1l1s6">
                    <div class="w-full h-full bg-gray-700 rounded-2xl px-4 py-2.5 cursor-pointer"
                        wire:click="openModal(1)">
                        <div class="h-full w-full bg-slate-600 rounded-2xl flex flex-col items-center justify-center">
                            <img src="{{ asset('images/course/generalization.png') }}" alt="" class="w-4/5">
                            <h2 class="text-white font-intelmedium text-xl xl:text-2xl pt-2">
                                Generalizations
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-xs mx-auto dynamic-height-m1l1s6">
                    <div class="w-full h-full bg-gray-700 rounded-2xl px-4 py-2.5 cursor-pointer"
                        wire:click="openModal(2)">
                        <div class="h-full w-full bg-slate-600 rounded-2xl flex flex-col items-center justify-center">
                            <img src="{{ asset('images/course/reasoning.png') }}" alt="" class="w-4/5">
                            <h2 class="text-white font-intelmedium text-xl xl:text-2xl pt-2">
                                Reasoning
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-xs mx-auto dynamic-height-m1l1s6">
                    <div class="w-full h-full bg-gray-700 rounded-2xl px-4 py-2.5 cursor-pointer"
                        wire:click="openModal(3)">

                        <div class="h-full w-full bg-slate-600 rounded-2xl flex flex-col items-center justify-center">
                            <img src="{{ asset('images/course/problem.png') }}" alt="" class="w-4/5">
                            <h2 class="text-white font-intelmedium text-xl xl:text-2xl pt-2">
                                Problem-Solving
                            </h2>
                        </div>
                    </div>
                </div>
                <div class="w-full max-w-xs mx-auto dynamic-height-m1l1s6">
                    <div class="w-full h-full bg-gray-700 rounded-2xl px-4 py-2.5 cursor-pointer"
                        wire:click="openModal(4)">

                        <div class="h-full w-full bg-slate-600 rounded-2xl flex flex-col items-center justify-center">
                            <img src="{{ asset('images/course/language.png') }}" alt="" class="w-4/5">
                            <h2 class="text-white font-intelmedium text-xl xl:text-2xl pt-2">
                                Understanding Language
                            </h2>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Lets look at an example...' : 'Please complete the slide above' }}
            </button>
        @else
        @endif
    </div>

    <script>
        function adjustHeight() {
            var elements = document.querySelectorAll(".dynamic-height-m1l1s6");
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
