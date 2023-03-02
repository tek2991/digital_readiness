<div id="m1l3s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Question 1</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Which of these is an AI application?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        @if ($selectedAnswer)
            @if ($answer == $selectedAnswer)
                <div
                    class="text-green-400 font-intelmedium text-2xl p-4 pb-0 rounded-lg mt-6 w-full flex justify-center items-center">
                    <span>Correct!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                    </svg>
                </div>
                <p class="text-center font-intelmedium py-3 mb-3 text-sm">
                    The cleaner bot uses computer vision and AI algorithms to navigate through the floor while cleaning. It avoids obstacles and chooses the best routes. Automatic Potato Peeler is an automated machine that works on preset commands. 
                </p>
            @else
                <div
                    class="text-red-400 font-intelmedium text-2xl p-4 rounded-lg my-6 w-full flex justify-center items-center">
                    <span>Incorrect!</span>
                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                        stroke="currentColor" class="w-6 h-6 ml-2">
                        <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                    </svg>
                </div>
            @endif
        @endif
        <div class="w-full grid grid-cols-2 gap-4">
            @php
                $right = 'ring-2 ring-green-400 shadow-lg shadow-green-400';
                $wrong = 'ring-2 ring-red-400 shadow-lg shadow-red-400';
            @endphp
            @if ($selectedAnswer)
                <div class="cursor-pointer rounded {{ $answer == 1 ? $right : $wrong }}" wire:click="checkAnswer(1)">
                    <img src="{{ asset('images/course/potato.gif') }}" alt=""
                        class="w-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Automatic potato peeler
                    </p>
                </div>
                <div class="cursor-pointer rounded {{ $answer == 2 ? $right : $wrong }}" wire:click="checkAnswer(2)">
                    <img src="{{ asset('images/course/robot_vacuum.gif') }}" alt=""
                        class="w-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Roomba cleaner bo
                    </p>
                </div>
            @else
                <div class="cursor-pointer rounded" wire:click="checkAnswer(1)">
                    <img src="{{ asset('images/course/potato.gif') }}" alt=""
                        class="w-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Automatic potato peeler
                    </p>
                </div>
                <div class="cursor-pointer rounded" wire:click="checkAnswer(2)">
                    <img src="{{ asset('images/course/robot_vacuum.gif') }}" alt=""
                        class="w-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Roomba cleaner bo
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
