<div id="m1l1s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Artificial Intelligence, Machine Learning & Deep Learning
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="xl:grid xl:grid-cols-2 gap-8">
            <div class="">
                <div class="bg-green-700 rounded-full w-full dymanic-height flex flex-col justify-between items-center">
                    <div class="bg-green-200 p-3 rounded-xl mt-8 animate-opacity">
                        <p>Artificial Intelligence</p>
                    </div>
                    <div
                        class="bg-green-500 rounded-full w-3/4 dymanic-height flex flex-col justify-between items-center">
                        <div class="bg-green-200 p-3 rounded-xl mt-7 animate-opacity">
                            <p>Machine Learning</p>
                        </div>
                        <div class="bg-green-400 rounded-full w-2/3 dymanic-height flex justify-center items-center">
                            <div class="bg-green-200 p-3 rounded-xl animate-opacity">
                                <p>Deep Learning</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <div class="w-full h-full flex flex-col justify-between items-center">
                    <div class="bg-green-200 p-3 w-full rounded-xl xl:mt-0 mt-5 animate-right">
                        <p class="block xl:hidden font-intelmedium text-xl text-gray-700">Artificial Intelligence</p>
                        <p class="text-gray-700">Mimicking the intelligence or behavior pattern of humans (umbrella term)</p>
                    </div>
                    <div class="h-3/4 flex flex-col justify-between items-center">
                        <div class="bg-green-200 p-3 rounded-xl mt-8 xl:mt-7 animate-right">
                            <div>
                                <p class="block xl:hidden font-intelmedium text-xl text-gray-700">Machine Learning</p>
                                <p class="text-gray-700">A technique by which a computer can “learn” from data without explicit rules.</p>
                            </div>
                        </div>
                        <div class="h-2/3 flex justify-center items-center">
                            <div class="bg-green-200 p-3 w-full mt-8 xl:mt-0 rounded-xl animate-right">
                                <p class="block xl:hidden font-intelmedium text-xl text-gray-700">Deep Learning</p>
                                <p class="text-gray-700">A technique to perform machine learning inspired by our brain’s own network of
                                    neurons</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets see some examples
            </button>
        @else
        @endif
    </div>

    <script>
        function adjustHeight() {
            var elements = document.querySelectorAll('.dymanic-height');
            elements.forEach(function(element) {
                var width = element.offsetWidth;
                element.style.height = width + "px";
            });
        }

        document.addEventListener("DOMContentLoaded", adjustHeight);
        window.addEventListener("resize", adjustHeight);
    </script>
</div>
