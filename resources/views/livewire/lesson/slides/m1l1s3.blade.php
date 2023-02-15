<div id="m1l1s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Module 1 - Introduction to AI</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            What is Artificial Inteligence
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="lg:flex lg:justify-start">
            <div class="w-64 mx-auto animate-opacity">
                <img src="{{ asset('svgs/thinking.svg') }}" alt="ai" class="mx-auto">
            </div>
            <div class="mt-6">
                <h3
                    class="ml-4 px-4 py-2 bg-intelblue text-white font-intelmedium text-xl rounded-full w-fit flex items-center justify-center animate-opacity">
                    <span>
                        Intelligence
                    </span>
                </h3>
                <p class="px-4 py-2 mt-4 max-w-sm animate-right">
                    Intelligence is the mental ability to learn new things, solve problems, and take decisions
                </p>
            </div>
        </div>
        <div class="flex justify-center w-full my-12">
            <h1 class="font-intelbold text-gray-700 text-3xl pb-2 mx-auto">
                Can a machine also do these things?
            </h1>
        </div>
        <div class="lg:flex lg:justify-start">
            <div class="mt-6">
                <h3
                    class="ml-4 px-4 py-2 text-intelblue bg-secondary font-intelmedium text-xl rounded-full w-fit flex items-center justify-center animate-opacity">
                    <span>
                        Artificial intelligence
                    </span>
                </h3>
                <p class="px-4 py-2 mt-4 max-w-sm animate-left">
                    Artificial intelligence is a machine’s ability to learn new things, identify patterns, solve
                    problems, make predictions and take decisions </p>
            </div>
            <div class="w-64 mx-auto animate-opacity">
                <img src="{{ asset('svgs/ai2.svg') }}" alt="ai" class="mx-auto">
            </div>
        </div>
        <div class="mt-8">
            @if ($allow_next && $show_next)
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Learn more about Aitificial Intelligence
                </button>
            @else
            @endif
        </div>
    </div>
</div>
