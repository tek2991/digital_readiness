<div id="m2l2s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Perceptron Example (Go to the park)</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="my-3 grid grid-cols-1">
            @if ($part_no == 1)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Inputs as a variable X</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    let’s draw the perceptron with four inputs (from X1 to X4).
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Next, we have their weights (from W1 to W4).
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Then, we also have the bias B, with weight WB.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Finally, we sum them all up, compare with threshold, and we will get our output (Y).
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 2)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Now we will fill in the four inputs with the factors that we have listed out.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Do I have a jacket?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Do I have umbrella?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Is it sunny now?
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    What is the weather forecast for later? 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_input.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 3)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Assigning the importance.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Now we will fill in the importance. But the importance is not very useful in mathematical calculations. 
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_weights.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 4)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Assigning importance of numerical value.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Next, let us assign some numbers to them. At the same time, we will also assign a number for the bias weight (WB).
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_weights2.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 5)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Lets look at the following scenario:</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    I have a jacket, I don’t have an umbrella, it is sunny now, and the weather forecast is going to rain.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    We can convert the yes and no to numbers 1 and 0. For bias, we will always take 1.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_scenario.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 6)
                <div class="flex flex-col justify-center">
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Since this is higher than the threshold (which is zero), the result is that I will go out to the park.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_scenario.png') }}" alt="ai" class="object-cover">
                    <img src="{{ asset('images/course/perception_park_result.png') }}" alt="ai" class="object-cover pt-6">
                </div>
            @endif
        </div>
    </div>
    <div class="mt-14 grid grid-cols-2 gap-x-8">
        <button wire:click="prevStep" {{ $part_no == 1 ? 'disabled' : '' }}
            class="{{ $part_no == 1 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Prev
        </button>
        <button wire:click="nextSlide" {{ $part_no == 6 ? 'disabled' : '' }}
            class="{{ $part_no == 6 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Next
        </button>
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
