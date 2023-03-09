<div id="m1l3s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Question 2</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Which of these is an AI application?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        @if (count($selectedAnswers) == 2)
            <div
                class="text-green-400 font-intelmedium text-2xl p-4 pb-0 rounded-lg mt-6 w-full flex justify-center items-center">
                <span>Correct!</span>
                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                    stroke="currentColor" class="w-6 h-6 ml-2">
                    <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                </svg>
            </div>
            <p class="text-center font-intelmedium py-3 mb-3 text-sm">
                Both the applications use computer vision and AI algorithms. Pose detection is done through estimation
                of poses after images or videos are fed into the app. Objects are detected by identifying the objects in
                the image or video.
            </p>
        @endif

        <div class="w-full grid grid-cols-2 gap-4">
            @if (in_array(1, $selectedAnswers))
                <div class="cursor-pointer rounded ring-2 ring-green-400 shadow-lg shadow-green-400"
                    wire:click="addToAnswer(1)">
                    <img src="{{ asset('images/course/exercise.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Pose detection application
                    </p>
                </div>
            @else
                <div class="cursor-pointer rounded" wire:click="addToAnswer(1)">
                    <img src="{{ asset('images/course/exercise.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Pose detection application
                    </p>
                </div>
            @endif
            @if (in_array(2, $selectedAnswers))
                <div class="cursor-pointer rounded ring-2 ring-green-400 shadow-lg shadow-green-400"
                    wire:click="addToAnswer(2)">
                    <img src="{{ asset('images/course/traffic.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Object detection application
                    </p>
                </div>
            @else
                <div class="cursor-pointer rounded" wire:click="addToAnswer(2)">
                    <img src="{{ asset('images/course/traffic.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Object detection application
                    </p>
                </div>
            @endif
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Continue...' : 'Please complete the slide above' }}
            </button>
        @else
        @endif
    </div>
</div>
