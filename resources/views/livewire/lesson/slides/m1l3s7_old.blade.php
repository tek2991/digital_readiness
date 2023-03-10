<div id="m1l3s7" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Question 6</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Does this example use AI? If so, why? If not, why not?
        </h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="max-w-xs mx-auto mb-12">
            <div
                class="flex justify-center items-center bg-secondary min-h-24 w-full rounded-lg text-3xl font-intelmedium p-4">
                <p class="text-intelblue text-center my-2">Translating one word from one language to another</p>
            </div>
        </div>

        <div class="h-20">
            @if ($selectedAnswer)
                @if ($answer == $selectedAnswer)
                    <div class="w-full h-full flex justify-between items-center">
                        <p class="text-lg font-intelmedium text-intelblue text-center">
                            No. Translating words through a table is not an example of AI. But making a translator that
                            is able to understand context and verbs to a certain degree can be considered AI.
                        </p>
                    </div>
                @endif
            @endif
        </div>
        <div class="h-20">
            @if ($selectedAnswer)
                @if ($answer == $selectedAnswer)
                    <div
                        class="text-green-400 font-intelmedium text-2xl p-4 rounded-lg w-full flex justify-center items-center">
                        <span>Correct!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12.75l6 6 9-13.5" />
                        </svg>
                    </div>
                @else
                    <div
                        class="text-red-400 font-intelmedium text-2xl p-4 rounded-lg w-full flex justify-center items-center">
                        <span>Incorrect!</span>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5"
                            stroke="currentColor" class="w-6 h-6 ml-2">
                            <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                        </svg>
                    </div>
                @endif
            @endif
        </div>
        <div class="w-full grid grid-cols-2 gap-4">
            @php
                $right = 'bg-green-400 shadow-lg shadow-green-400';
                $wrong = 'bg-red-400 shadow-lg shadow-red-400';
            @endphp
            @if ($selectedAnswer)
                <button class="cursor-pointer rounded p-4 {{ $answer == 1 ? $right : $wrong }}"
                    wire:click="checkAnswer(1)">
                    Yes
                </button>
                <button class="cursor-pointer rounded p-4 {{ $answer == 2 ? $right : $wrong }}"
                    wire:click="checkAnswer(2)">
                    No
                </button>
            @else
                <button class="cursor-pointer rounded p-4 bg-blue-400 shadow-sm shadow-blue-400"
                    wire:click="checkAnswer(1)">
                    Yes
                </button>
                <button class="cursor-pointer rounded p-4 bg-blue-400 shadow-sm shadow-blue-400"
                    wire:click="checkAnswer(2)">
                    No
                </button>
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
