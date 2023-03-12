<div id="m2l1s4" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 id="foo" class="font-intelbold text-intelblue text-3xl pb-2">Perceptron Example (Go to the park)</h1>
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
            @endif
            @if ($part_no == 2)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Now we will fill in the four inputs with the factors that we
                        have listed out.</p>
                    <ul class="grid grid-cols-2">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Do I have a jacket? <span class="font-intelmedium text-intelblue">Yes(1)</span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Do I have umbrella? <span class="font-intelmedium text-intelblue">No(0)</span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    Is it sunny now? <span class="font-intelmedium text-intelblue">Yes(1)</span>
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="">
                                    What is the weather forecast for later? <span
                                        class="font-intelmedium text-intelblue">Cloudy(0)</span>
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
            @if ($part_no == 3)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Assigning the weights.</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="text-justify">
                                    The value of the bias is also based on personal experience. A more cautious person
                                    may set the bias to a higher value, while a more adventurous person may set the bias
                                    to a lower value. There is no right or wrong answer here. However, the effect of the
                                    bias will determine the accuracy of the perceptron. This is why everyone comes up
                                    with different decisions even though the situation is the same. Here, we will set
                                    the bias to 4.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
            @if ($part_no == 4)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">The Result</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="text-justify">
                                    The result is derived by adding up all the inputs multiplied by their weights, and
                                    then subtracting the bias. The result is 0.5, which is greater than the threshold of
                                    0. Therefore, the perceptron will output 1, which means that we should go to the
                                    park.
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
            @if ($part_no == 5)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Free play</p>
                    <ul class="">
                        <li>
                            <div class="px-4 py-2 flex justify-between">
                                <p class="text-justify">
                                    Now, let’s try to use the perceptron to make a decision. You can change the inputs
                                    and weights to see how the perceptron will make a decision.
                            </div>
                        </li>
                    </ul>
                </div>
            @endif
            <div class="w-full flex flex-col justify-center mt-8 xl:mt-3 xl:p-0">
                <div id="bar" class="grid grid-cols-4 gap-x-4">
                    {{-- Inputs --}}
                    <div>
                        <p class="font-intelmedium text-md mb-2">&nbsp;</p>
                        <div class="grid grid-cols-1 gap-y-4">
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue pb-1">Input 1</p>
                                <div wire:click="changeInput(1)"
                                    class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center cursor-pointer {{ $part_no == 5 ? 'animate-pulse' : '' }}">
                                    <p id="input1" class="font-intelmedium text-lg text-intelblue">
                                        {{ $input1 !== null ? $input1 : 'X1' }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue pb-1">Input 2</p>
                                <div wire:click="changeInput(2)"
                                    class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center cursor-pointer {{ $part_no == 5 ? 'animate-pulse' : '' }}">
                                    <p id="input2" class="font-intelmedium text-lg text-intelblue">
                                        {{ $input2 !== null ? $input2 : 'X2' }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue pb-1">Input 3</p>
                                <div wire:click="changeInput(3)"
                                    class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center cursor-pointer {{ $part_no == 5 ? 'animate-pulse' : '' }}">
                                    <p id="input3" class="font-intelmedium text-lg text-intelblue">
                                        {{ $input3 !== null ? $input3 : 'X3' }}</p>
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue pb-1">Input 4</p>
                                <div wire:click="changeInput(4)"
                                    class="w-12 h-12 bg-intellight border-intelblue border rounded-full flex items-center justify-center cursor-pointer {{ $part_no == 5 ? 'animate-pulse' : '' }}">
                                    <p id="input4" class="font-intelmedium text-lg text-intelblue">
                                        {{ $input4 !== null ? $input4 : 'X4' }}</p>
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Weights --}}
                    <div>
                        <p class="font-intelmedium text-md text-intelblue mb-2.5 translate-y-9 text-center">Weights
                        </p>
                        <div class="grid grid-cols-1 gap-y-4">
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                <div
                                    class="w-20 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                    <input type="number" id="weight1" {{ $part_no == 5 ? '' : 'readonly' }}
                                        class="w-20 h-full px-1 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm {{ $part_no == 5 ? 'animate-pulse' : '' }}"
                                        wire:model="weight1" placeholder="W-1">
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                <div
                                    class="w-20 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                    <input type="number" id="weight2" {{ $part_no == 5 ? '' : 'readonly' }}
                                        class="w-20 h-full px-1 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm {{ $part_no == 5 ? 'animate-pulse' : '' }}"
                                        wire:model="weight2" placeholder="W-2">
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                <div
                                    class="w-20 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                    <input type="number" id="weight3" {{ $part_no == 5 ? '' : 'readonly' }}
                                        class="w-20 h-full px-1 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm {{ $part_no == 5 ? 'animate-pulse' : '' }}"
                                        wire:model="weight3" placeholder="W-3">
                                </div>
                            </div>
                            <div class="flex flex-col justify-around items-center">
                                <p class="font-intelmedium text-md text-intelblue">&nbsp;</p>
                                <div
                                    class="w-20 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center">
                                    <input type="number" id="weight4" {{ $part_no == 5 ? '' : 'readonly' }}
                                        class="w-20 h-full px-1 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm {{ $part_no == 5 ? 'animate-pulse' : '' }}"
                                        wire:model="weight4" placeholder="W-4">
                                </div>
                            </div>
                        </div>
                    </div>

                    {{-- Function & Bias --}}
                    <div class="flex flex-col justify-center items-center">
                        <div>
                            <p class="font-intelmedium text-md text-intelblue pb-1 text-center">Weighted Sum</p>
                            <div class="w-14 h-14 bg-secondary rounded-full flex items-center justify-center mx-auto">
                                <p id="sum" class="font-intelmedium text-3xl text-intelblue">
                                    {{ $wsum ? $wsum : 'Ʃ' }}
                                </p>
                            </div>
                        </div>

                        <div class="mt-12">
                            <p class="font-intelmedium text-md text-intelblue pb-1 text-center">Bias</p>
                            <div
                                class="w-20 h-9 my-2 bg-intelblue2 border-intellight border rounded-sm flex items-center justify-center {{ $part_no == 5 ? 'animate-pulse' : '' }}">
                                <input type="number" id="weight4" {{ $part_no == 5 ? '' : 'readonly' }}
                                    class="w-20 h-full px-1 bg-intelblue2 border-intellight focus:border-intelblue rounded-sm"
                                    wire:model="bias" placeholder="β">
                            </div>
                        </div>
                    </div>

                    {{-- Output --}}
                    <div class="flex flex-col justify-center items-center">
                        <p class="font-intelmedium text-md text-intelblue pb-1">Output</p>
                        <div
                            class="w-14 h-14 {{ $output > 0 ? 'bg-green-400' : 'bg-red-400' }}  rounded-full flex items-center justify-center">
                            <br class="block sm:hidden">
                            <p id="sum" class="font-intelmedium text-3xl text-intelblue">
                                {{ $output ? $output : 'Y' }}
                            </p>
                        </div>
                    </div>
                </div>
                @if ($output)
                    <div class="text-2xl font-intelmedium text-intelblue mt-8">
                        <p>The Math</p>
                    </div>
                    <div class="flex auto-cols-auto flex-wrap">
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intellight px-3 py-1 rounded-lg border-intelblue border">{{ $input1 }}</span>
                            <span class="text-intelblue text-sm">Input-1</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            X
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intelblue2 px-2 py-1 rounded-lg border-intelblue border">{{ $weight1 }}</span>
                            <span class="text-intelblue text-sm">Weight-1</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            +
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intellight px-3 py-1 rounded-lg border-intelblue border">{{ $input2 }}</span>
                            <span class="text-intelblue text-sm">Input-2</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            X
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intelblue2 px-2 py-1 rounded-lg border-intelblue border">{{ $weight2 }}</span>
                            <span class="text-intelblue text-sm">Weight-2</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            +
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intellight px-3 py-1 rounded-lg border-intelblue border">{{ $input3 }}</span>
                            <span class="text-intelblue text-sm">Input-3</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            X
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intelblue2 px-2 py-1 rounded-lg border-intelblue border">{{ $weight3 }}</span>
                            <span class="text-intelblue text-sm">Weight-3</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            +
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intellight px-3 py-1 rounded-lg border-intelblue border">{{ $input4 }}</span>
                            <span class="text-intelblue text-sm">Input-4</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            X
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intelblue2 px-2 py-1 rounded-lg border-intelblue border">{{ $weight4 }}</span>
                            <span class="text-intelblue text-sm">Weight-4</span>
                        </span>
                        <span class="flex items-center text-xl font-intelmedium text-intelblue px-1">
                            -
                        </span>
                        <span class="flex flex-col justify-center items-center p-2 mt-4">
                            <span
                                class="bg-intellight px-3 py-1 rounded-lg border-intelblue border">{{ $bias }}</span>
                            <span class="text-intelblue text-sm">Bias</span>
                        </span>
                        <span class="flex items-center text-2xl font-intelmedium text-intelblue pl-1 pr-2">
                            =
                        </span>
                        <span
                            class="flex items-center justify-center text-2xl font-intelbold text-intelblue w-12 h-12 {{ $output > 0 ? 'bg-green-400' : 'bg-red-400' }} rounded-full mt-4">
                            {{ $output }}
                        </span>
                    </div>
                    <div class="mt-4">
                        <p class="text-xl font-intelbold text-intelblue">
                            @if ($output > 0)
                                As the output is greater than 0, we will go to the park.
                            @endif
                            @if ($output < 0)
                                As the output is less than 0, we will not go to the park.
                            @endif
                        </p>
                    </div>
                @endif
            </div>
        </div>
    </div>
    <div class="mt-6 grid grid-cols-2 gap-x-8">
        <button wire:click="prevStep" {{ $part_no == 1 ? 'disabled' : '' }}
            class="{{ $part_no == 1 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Prev
        </button>
        <button wire:click="nextSlide" {{ $part_no == 5 ? 'disabled' : '' }}
            class="{{ $part_no == 5 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Next
        </button>
    </div>
    <div class="mt-8">
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
