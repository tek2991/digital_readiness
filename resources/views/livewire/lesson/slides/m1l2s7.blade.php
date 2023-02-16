<div id="m1l2s7" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            AI is everywhere
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="">
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast">
                    <img src="{{ asset('images/course/heart.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-red-400 text-2xl font-intelbold animate-opacity-fast">
                    <h3>Medical</h3>
                </div>
                <div class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center bg-red-400 rounded-xl text-white font-intelmedium text-xl animate-right-fast">
                    <p class="p-3">
                        AI-assisted disease detection using computer vision
                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left">
                    <img src="{{ asset('images/course/man.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-blue-400 text-2xl font-intelbold animate-opacity">
                    <h3>Business</h3>
                </div>
                <div class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center bg-blue-400 rounded-xl text-white font-intelmedium text-xl animate-right">
                    <p class="p-3">
                        Predictions related to the markets                     </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-slow">
                    <img src="{{ asset('images/course/car.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-red-500 text-2xl font-intelbold animate-opacity-slow">
                    <h3>Automotive</h3>
                </div>
                <div class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center bg-red-500 rounded-xl text-white font-intelmedium text-xl animate-right-slow">
                    <p class="p-3">
                        Computer vision transforming autonomous cars                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-slow">
                    <img src="{{ asset('images/course/hacker.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-slate-400 text-2xl font-intelbold animate-opacity-slow">
                    <h3>Cybersecurity</h3>
                </div>
                <div class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center bg-slate-400 rounded-xl text-white font-intelmedium text-xl animate-right-slow">
                    <p class="p-3">
                        AI-assisted analysis and prediction of cyber attacks                    </p>
                </div>
            </div>  
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets learn how AI is used...
            </button>
        @else
        @endif
    </div>
</div>
