<div id="m1l2s5" class="{{ $current_slide ? 'min-h-80vh' : '' }}">
    <div class="text-gray-700 mt-8">
        <h3 class="text-center font-intelmedium text-2xl text-intelblue animate-opacity-slow">Part of every top 10 strategic technology trend for 2020</h3>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets look at some more example...
            </button>
        @else
        @endif
    </div>
</div>
