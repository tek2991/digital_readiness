<div id="m3l1s7" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">AI for Agriculture </h1>
    </div>
    <div class="text-gray-700 my-14">
        <div>
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast flex items-center">
                    <img src="{{ asset('images/course/disease_diagnosis.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-xl font-intelbold animate-opacity-fast" style="color:#2468b5">
                    <h3>Disease Diagnosis </h3>
                </div>
                <div style="background-color: #2468b5" class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center rounded-xl text-white font-intelmedium text-lg animate-right-fast">
                    <p class="p-3">
                        With AI predictions, farmers can get knowledge of diseases easily. With this, they can easily diagnose diseases with proper strategy and on time. It can save the life of plants and farmer's time
                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast flex items-center">
                    <img src="{{ asset('images/course/intelligent_spraying.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-xl font-intelbold animate-opacity-fast" style="color:#47c7fd">
                    <h3>Intelligent Spraying</h3>
                </div>
                <div style="background-color: #47c7fd" class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center rounded-xl text-white font-intelmedium text-lg animate-right-fast">
                    <p class="p-3">
                        AI sensors can detect weed-affected areas and precisely spray herbicides
                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast flex items-center">
                    <img src="{{ asset('images/course/agricultural_robots.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-xl font-intelbold animate-opacity-fast" style="color:#f9c91c">
                    <h3>Agricultural Robots</h3>
                </div>
                <div style="background-color: #f9c91c" class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center rounded-xl text-white font-intelmedium text-lg animate-right-fast">
                    <p class="p-3">
                        AI robots are also trained in checking the quality of crops, detect and controlling weeds, and harvesting the crop with faster speed compared to a human.
                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast flex items-center">
                    <img src="{{ asset('images/course/crop_yield.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-xl font-intelbold animate-opacity-fast" style="color:#e96116">
                    <h3>Crop Yield / Price Prediction </h3>
                </div>
                <div style="background-color: #e96116" class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center rounded-xl text-white font-intelmedium text-lg animate-right-fast">
                    <p class="p-3">
                        With price forecasting, farmers can get a better idea about the price of crops for the next few weeks, which can help them to get maximum profit.
                    </p>
                </div>
            </div>  
            <div class="grid grid-cols-7 my-8 lg:mb-5">
                <div class="col-span-2 lg:col-span-1 animate-left-fast flex items-center">
                    <img src="{{ asset('images/course/crop_soil_monitoring.png') }}" alt="" class="max-h-16 lg:max-h-24 object-cover">
                </div>
                <div class="col-span-5 lg:col-span-2 flex items-center justify-center text-xl font-intelbold animate-opacity-fast" style="color:#8f5da2">
                    <h3>Crop / Soil Monitoring</h3>
                </div>
                <div style="background-color: #8f5da2" class="col-span-7 mt-3 lg:mt-0 lg:col-span-4 lg:ml-3 flex items-center justify-center rounded-xl text-white font-intelmedium text-lg animate-right-fast">
                    <p class="p-3">
                        Diagnosing the soil defects, nutrients, and deficiencies in soil.
                    </p>
                </div>
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
