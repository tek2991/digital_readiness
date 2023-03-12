<div id="m2l2s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="text-gray-700 mt-14">
        <div class="my-3 grid grid-cols-1 lg:grid-cols-5 gap-4">
            <div class="flex flex-col justify-center lg:col-span-2 lg:order-2">
                <ul class="">
                    <li>
                        <div class="px-4 py-2 flex justify-between">
                            <p class="font-intelmedium text-xl animate-opacity-slow">
                                No specific expertise or coding is required to use this tool.
                            </p>
                        </div>
                    </li>
                </ul>
            </div>
            {{-- import pic --}}
            <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0 lg:col-span-3">
                <img src="{{ asset('images/course/teachable2.jpg') }}" alt="ai"
                    class="object-cover animate-zoom-slow">
            </div>
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
