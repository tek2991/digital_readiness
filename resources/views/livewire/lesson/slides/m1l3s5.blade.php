<div id="m1l3s5" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Question 4</h3>
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
                    A laundry folding machine simply follows certain instructions and folds the laundry in a proper
                    manner. On the other hand, enabling robotic machines to do complex tasks like create music from
                    instruments requires Artificial Intelligence to train the machine to properly execute the given
                    task.
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
                $right = 'ring-2 ring-intellight border-2 border-intellight';
                $wrong = 'ring-2 ring-gray-400 border-2 border-gray-400 grayscale';
            @endphp
            @if ($selectedAnswer)
                <div class="cursor-pointer rounded-lg {{ $answer == 1 ? $right : $wrong }}" wire:click="checkAnswer(1)">
                    <img src="{{ asset('images/course/machine.png') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Laundry folding machine
                    </p>
                </div>
                <div class="cursor-pointer rounded-lg {{ $answer == 2 ? $right : $wrong }}" wire:click="checkAnswer(2)">
                    <img src="{{ asset('images/course/robot.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Robot playing a music instrument
                    </p>
                </div>
            @else
                <div class="cursor-pointer rounded" wire:click="checkAnswer(1)">
                    <img src="{{ asset('images/course/machine.png') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Laundry folding machine
                    </p>
                </div>
                <div class="cursor-pointer rounded" wire:click="checkAnswer(2)">
                    <img src="{{ asset('images/course/robot.gif') }}" alt=""
                        class="w-full h-full object-cover rounded">
                    <p class="text-center font-intelmedium py-3">
                        Robot playing a music instrument
                    </p>
                </div>
            @endif
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
