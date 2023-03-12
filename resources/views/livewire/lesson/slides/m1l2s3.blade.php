<div id="m1l2s3" class="pt-36 {{ $current_slide ? 'min-h-90vh' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            AI can understand natural language
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div>
            <p class="text-center font-intelregular text-lg">
                Google Assistant is a virtual assistant software application developed by Google that is primarily
                available on mobile and home automation devices. Based on artificial intelligence, Google Assistant can
                engage in two-way conversations.
            </p>
        </div>
        <div class="grid grid-cols-3 gap-3 mt-6">
            <div>
                <img src="{{ asset('images/course/phone.jpg') }}" alt="" class="object-cover animate-left-slow">
            </div>
            <div>
                <img src="{{ asset('images/course/phone2.jpg') }}" alt=""
                    class="object-cover h-full animate-top-slow">
            </div>
            <div>
                <img src="{{ asset('images/course/speaker.jpg') }}" alt=""
                    class="object-cover animate-right-slow">
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Lets look at some more example...
                </button>
            </div>
        @else
        @endif
    </div>
</div>
