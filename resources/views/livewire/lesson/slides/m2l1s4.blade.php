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
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-8 p-6 xl:p-0">
                    {{-- <img src="{{ asset('images/course/perception_park.png') }}" alt="ai" class="object-cover"> --}}

                    <div class="grid grid-cols-4 gap-x-8">
                        {{-- Inputs --}}
                        <div>
                            <p class="font-intelmedium text-md mb-2">&nbsp;</p>
                            <div class="grid grid-cols-1 gap-y-8">
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue pb-1">Input 1</p>
                                    <div
                                        class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center">
                                        <p id="input1" class="font-intelmedium text-lg text-intelblue">
                                            {{ $input1 ? $input1 : 'X1' }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue pb-1">Input 2</p>
                                    <div
                                        class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center">
                                        <p id="input2" class="font-intelmedium text-lg text-intelblue">
                                            {{ $input2 ? $input2 : 'X2' }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue pb-1">Input 3</p>
                                    <div
                                        class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center">
                                        <p id="input3" class="font-intelmedium text-lg text-intelblue">
                                            {{ $input3 ? $input3 : 'X3' }}</p>
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue pb-1">Input 4</p>
                                    <div
                                        class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center">
                                        <p id="input4" class="font-intelmedium text-lg text-intelblue">
                                            {{ $input4 ? $input4 : 'X4' }}</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Weights --}}
                        <div>
                            <p class="font-intelmedium text-md text-intelblue mb-2.5 translate-y-9 text-center">Weights
                            </p>
                            <div class="grid grid-cols-1 gap-y-8">
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                    <div
                                        class="w-15 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                        <span class="font-intelmedium text-sm text-intelblue mr-2">W-1</span>
                                        <input type="text" id="weight1"
                                            class="w-9 h-6 px-0.5 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm"
                                            wire:model="weight1">
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                    <div
                                        class="w-15 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                        <span class="font-intelmedium text-sm text-intelblue mr-2">W-2</span>
                                        <input type="text" id="weight2"
                                            class="w-9 h-6 px-0.5 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm"
                                            wire:model="weight2">
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                    <div
                                        class="w-15 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                        <span class="font-intelmedium text-sm text-intelblue mr-2">W-3</span>
                                        <input type="text" id="weight3"
                                            class="w-9 h-6 px-0.5 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm"
                                            wire:model="weight3">
                                    </div>
                                </div>
                                <div class="flex flex-col justify-around">
                                    <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                    <div
                                        class="w-15 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                        <span class="font-intelmedium text-sm text-intelblue mr-2">W-4</span>
                                        <input type="text" id="weight4"
                                            class="w-9 h-6 px-0.5 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm"
                                            wire:model="weight4">
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- Function & Bias --}}
                        <div class="flex flex-col justify-center items-center">
                            <p class="font-intelmedium text-md text-intelblue pb-1">Weighted Sum</p>
                            <div
                                class="w-20 h-20 bg-secondary rounded-full flex items-center justify-center">
                                <p id="sum" class="font-intelmedium text-3xl text-intelblue">
                                    Ʃ
                                </p>
                            </div>
                        </div>

                        {{-- Output --}}
                        <div>
                            <div class="flex flex-col justify-center items-center">
                                <p class="font-intelmedium text-md text-intelblue pb-1">Weighted Sum</p>
                                <div
                                    class="w-20 h-20 bg-secondary rounded-full flex items-center justify-center">
                                    <p id="sum" class="font-intelmedium text-3xl text-intelblue">
                                        Ʃ
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            @endif
            @if ($part_no == 2)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Now we will fill in the four inputs with the factors that we
                        have listed out.</p>
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
                    <img src="{{ asset('images/course/perception_park_input.png') }}" alt="ai"
                        class="object-cover">
                </div>
            @endif
            @if ($part_no == 3)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Assigning the importance.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Now we will fill in the importance. But the importance is not very useful in
                                    mathematical calculations.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_weights.png') }}" alt="ai"
                        class="object-cover">
                </div>
            @endif
            @if ($part_no == 4)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Assigning importance of numerical value.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Next, let us assign some numbers to them. At the same time, we will also assign a
                                    number for the bias weight (WB).
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_weights2.png') }}" alt="ai"
                        class="object-cover">
                </div>
            @endif
            @if ($part_no == 5)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Lets look at the following scenario:</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    I have a jacket, I don’t have an umbrella, it is sunny now, and the weather forecast
                                    is going to rain.
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
                    <img src="{{ asset('images/course/perception_park_scenario.png') }}" alt="ai"
                        class="object-cover">
                </div>
            @endif
            @if ($part_no == 6)
                <div class="flex flex-col justify-center">
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Since this is higher than the threshold (which is zero), the result is that I will
                                    go out to the park.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center mt-8 xl:mt-0 p-6 xl:p-0">
                    <img src="{{ asset('images/course/perception_park_scenario.png') }}" alt="ai"
                        class="object-cover">
                    <img src="{{ asset('images/course/perception_park_result.png') }}" alt="ai"
                        class="object-cover pt-6">
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
