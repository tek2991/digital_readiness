<div id="m2l2s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Introduction to Teachable Machine</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">What can we classify in a teachable machine?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <section class="grid grid-cols-1 md:grid-cols-3 my-12 gap-y-8 md:gap-x-8">
            <div
                class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col justify-between animate-right">
                <img class="rounded-t-lg" src="{{ asset('images/course/tree.jpg') }}" alt="" />
                {{-- <div class="p-5 h-full flex flex-col justify-between"> --}}
                <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-gray-900 text-center">
                    Image
                </h5>
                {{-- </div> --}}
            </div>
            <div
                class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col justify-between animate-right-slow">
                <img class="rounded-t-lg" src="{{ asset('images/course/recording.jpg') }}" alt="" />
                {{-- <div class="p-5 h-full flex flex-col justify-between"> --}}
                <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-gray-900 text-center">
                    Audio
                </h5>
                {{-- </div> --}}
            </div>
            <div
                class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col justify-between animate-right-slow-2">
                <img class="rounded-t-lg" src="{{ asset('images/course/yoga.jpg') }}" alt="" />
                {{-- <div class="p-5 h-full flex flex-col justify-between"> --}}
                <h5 class="mb-2 text-2xl font-intelmedium tracking-tight text-gray-900 text-center">
                    Pose
                </h5>
                {{-- </div> --}}
            </div>
        </section>
        <div class="w-fit">
            <h1 class="font-intelbold text-intelblue text-xl pb-2 animate-opacity-slow">Any of the three Data forms can
                be classified in a teachable machine</h1>
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
