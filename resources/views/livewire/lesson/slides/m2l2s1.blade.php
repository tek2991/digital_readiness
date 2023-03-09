<div id="m2l2s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Let’s learn about an AI Tool</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Teachable Machine</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="my-3 grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="flex flex-col justify-center lg:col-span-2">
                <ul class="">
                    <li>
                        <div class="px-4 py-2 flex justify-between">
                            <p class="font-intelmedium text-xl animate-opacity-slow">
                                Teachable Machine is a web-based tool that makes creating machine learning models fast,
                                easy, and accessible to everyone.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- import pic --}}
            <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0 lg:col-span-3">
                <img src="{{ asset('images/course/teachable.png') }}" alt="ai" class="object-cover animate-zoom-slow">
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
