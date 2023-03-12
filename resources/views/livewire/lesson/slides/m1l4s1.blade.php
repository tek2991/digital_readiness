<div id="m1l4s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">AI Case Study</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Road Safety Concerns</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="mb-4">
            <img src="{{ asset('images/squares-nobg.png') }}" alt="">
        </div>
        <div class="w-full max-w-xl mx-auto">
            <div class="video-container">
                <iframe src="https://www.youtube.com/embed/CEv2GkaSDIY" title="YouTube video player" frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                    allowfullscreen></iframe>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                    class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    {{ $complete == true ? 'Continue...' : 'Please complete the video above' }}
                </button>
            </div>
        @else
        @endif
    </div>

    <script></script>
</div>
