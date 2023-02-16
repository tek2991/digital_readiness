<div id="m1l2s9" class="mt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Automation vs Artificial Intelligence
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="">
            
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets test our knowledge
            </button>
        @else
        @endif
    </div>
</div>
