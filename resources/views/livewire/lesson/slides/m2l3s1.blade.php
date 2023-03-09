<div id="m2l3s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Impact of AI</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Impact of AI in Manufacturing
        </h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="grid grid-cols-2 gap-6">
            <div class="w-full h-full flex justify-between items-center">
                <img src="{{ asset('images/course/robot_arm.png') }}" alt="" 
                    class="w-full h-full object-contain rounded shadow-sm animate-top">
            </div>
            <div class="w-full h-full flex justify-between items-center">
                <img src="{{ asset('images/course/forklift.jpg') }}" alt=""
                    class="w-full h-full object-contain rounded shadow-sm animate-top-slow-2">
            </div>
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
