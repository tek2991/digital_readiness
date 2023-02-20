<div id="m2l3s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Impact of AI</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Impact of AI on Our Job
        </h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="grid grid-cols-2 gap-6">
            <div class="grid grid-cols-2 gap-2">
                <div class="col-span-2 p-2 mb-2">
                    <div class="rounded p-3 max-w-xs mx-auto" style="background-color: #70ad47">
                        <p class="text-white font-intelmedium font-xl text-center">Old Jobs</p>
                    </div>
                </div>
                <div class="col-span-2">
                    <img src="{{ asset('images/course/job-a1.png') }}" alt="">
                </div>
                <div class="w-full h-full flex items-center">
                    <img src="{{ asset('images/course/job-a2.jpg') }}" alt="">
                </div>
                <div class="pl-2">
                    <img src="{{ asset('images/course/job-a3.jpg') }}" alt="">
                </div>
            </div>
            <div class="grid grid-cols-2 gap-2">
                <div class="col-span-2 p-2">
                    <div class="rounded p-3 max-w-xs mx-auto" style="background-color: #70ad47">
                        <p class="text-white font-intelmedium font-xl text-center">New Jobs</p>
                    </div>
                </div>
                <div class="w-full h-full flex items-center pr-2">
                    <img src="{{ asset('images/course/job-b1.jpg') }}" alt="">
                </div>
                <div>
                    <img src="{{ asset('images/course/job-b2.png') }}" alt="">
                </div>
                <div class="col-span-2 mt-2">
                    <img src="{{ asset('images/course/job-b3.jpg') }}" alt="" class="w-full object-cover">
                </div>
            </div>
        </div>
        <div class="max-w-xl mx-auto w-full mt-6">
            <p class="text-lg font-intelmedium text-center p-4">
                Gartner acknowledged in its report that AI will eliminate
                “millions of middle- and low-level positions.” But it emphasized
                that more new jobs will be created, including highly-skilled,
                management positions and even entry-level and low-skilled jobs.
            </p>
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
