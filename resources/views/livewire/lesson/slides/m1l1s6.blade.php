<div id="m1l1s6" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
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
                    wire:click='$emit("openModal", "course.text-modal", {{ json_encode(["title" => "AI produces generalizations", "body" => "AI makes generalization in learning. If it encounters a new scenario, it will try to relate it back to past experiences in order to decide. For example, the autonomous car has driven before in Sydney. It has not driven before in Melbourne. However, it can still relate to its driving in Sydney in order to make decisions for the situation in Melbourne. Another example is face detection. Every face is different, and yet it can understand that there is a face in the image."]) }})'>
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
                    wire:click='$emit("openModal", "course.text-modal", {{ json_encode(["title" => "AI can do reasoning", "body" => "AI can perform reasoning. It draws conclusions that are relevant and appropriate to the situations. It is much more than just a simple If-Else application. If red, stop. If green, go. It is not as simple as that. It would also analyze the behavior of pedestrians and predict if they would cross the street. It would also predict how long the pedestrian will take to reach in front of the car. Hence, AI is much more than just a simple If-Else."]) }})'>
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
                    wire:click='$emit("openModal", "course.text-modal", {{ json_encode(["title" => "AI can do Problem-Solving", "body" => "The capacity to respond to change dynamically and apply prior knowledge to solve new and unsolved issues is known as adaptive problem-solving. The AI chooses the optimum course of action in response to a constantly shifting circumstance."]) }})'>

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
                    wire:click='$emit("openModal", "course.text-modal", {{ json_encode(["title" => "AI can understand language", "body" => "AI can understand languages. It follows the syntax and rules of the languages, just like how we humans understand our languages.
                    And the examples of AI application include machine learning, computer vision, natural language processing, pattern recognition and knowledge management. 
                    Take some time to read through this information."]) }})'>

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
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets find out what AIs are capable of
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
                console.log('width:' + width)
            });
        }

        document.addEventListener("DOMContentLoaded", adjustHeight);
        window.addEventListener("resize", adjustHeight);
        // call adjustHeight
        setTimeout(adjustHeight, 100);
    </script>
</div>
