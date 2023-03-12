<div id="m1l3s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Quiz</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">AI vs Not-AI</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="w-full max-w-sm mx-auto">
            <img src="{{ asset('images/course/ai_not_ai.png') }}" alt="" class="w-full object-cover animate-pulse">
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Lets start
                </button>
            </div>
        @else
        @endif
    </div>
</div>
