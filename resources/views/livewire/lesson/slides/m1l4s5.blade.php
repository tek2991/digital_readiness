<div id="m1l4s5" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Badge</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Match the everyday uses of AI with its correct name</h1>
    </div>
    <div class="text-gray-700 mt-14" wire:ignore>
        <div id="badge-1" class="w-80 h-80 flex justify-between items-center mx-auto relative">
            <img src="{{ asset('images/badge.png') }}" alt="" class="">
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Next Module...' : 'Please complete the avtivity above' }}
            </button>
        @else
        @endif
    </div>
</div>
