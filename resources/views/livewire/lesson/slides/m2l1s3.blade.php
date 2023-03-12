<div id="m2l1s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">What is a Perceptron?</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="my-3 grid grid-cols-1 md:grid-cols-2">
            @if ($part_no == 1)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Perceptron is simple logic. </p>
                    <ul class="">
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    With some conditions (we can call these conditions input, reasons, and factors), you
                                    will
                                    perform some simple arithmetic calculation on them, and finally, with the output of
                                    the
                                    calculation, you will determine its results.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center">
                    <img src="{{ asset('images/course/perception.png') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 2)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Add all the inputs (factors/conditions/ features) in</p>
                    <ul class="">
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    What are inputs? Inputs can be factors, reasons, conditions, in the decision-making
                                    process, etc.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    In the example just now, the inputs would be factors or conditions such as: do I
                                    have a jacket, do I have an umbrella, is it sunny etc.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    We will add all the inputs (we will name it X1, X2, X3, and so on)
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center">
                    <img src="{{ asset('images/course/perception_inputs.gif') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 3)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Introduce weights for the importance of the respective inputs
                    </p>
                    <ul class="">
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Deciding on the values is based on experience, preference, and relevance to the
                                    situation.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    That is why we introduce the weights here. A factor that is more important will have
                                    a larger weight. They are denoted with the symbol W.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Instead of just adding all the input, we now have a weighted input.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Weighted input means the input multiplied with its own weights, just like in the
                                    formula
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center">
                    <img src="{{ asset('images/course/perception_weights.gif') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 4)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">Introduce a ‘bias’ to get a ‘Yes’ or ‘No’ decision
                    </p>
                    <ul class="">
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    if we add all the inputs and the weights, the sum will always be a positive value.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    For a simple decision, it is either a yes or a no. If we take the positive value as
                                    yes, and the negative value as no, we can never get an answer of No as the value is
                                    always positive.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Therefore, we must have the possibility of summation being negative. Therefore, we
                                    introduce bias. Bias helps to bring the number down. In this diagram, bias is shown
                                    as w0.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center">
                    <img src="{{ asset('images/course/perception_weights2.gif') }}" alt="ai" class="object-cover">
                </div>
            @endif
            @if ($part_no == 5)
                <div class="flex flex-col justify-center">
                    <p class="text-justify text-lg mb-4">What is the outcome? <br>
                        Positive value = Yes Negative value = No</p>
                    <ul class="">
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Determine the outcome based on the summation of both the weighted input and weighted
                                    bias. If it is a positive number, then it is a Yes. If it is a negative number, it
                                    is a No.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    So, we are using zero (0) as a threshold. This is a step function. Any values below
                                    the threshold will be assigned low, which corresponds to No.
                                </p>
                            </div>
                        </li>
                        <li>
                            <div class="p-4 flex justify-between">
                                <p class="">
                                    Any values above the threshold will be assigned high, which corresponds to Yes.
                                </p>
                            </div>
                        </li>
                    </ul>
                </div>
                {{-- import pic --}}
                <div class="w-full flex flex-col justify-center">
                    <img src="{{ asset('images/course/perception_output.gif') }}" alt="ai" class="object-cover">
                </div>
            @endif
        </div>
    </div>
    <div class="mt-14 grid grid-cols-2 gap-x-8">
        <button wire:click="prevStep" {{ $part_no == 1 ? 'disabled' : '' }}
            class="{{ $part_no == 1 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Prev
        </button>
        <button wire:click="nextSlide" {{ $part_no == 5 ? 'disabled' : '' }}
            class="{{ $part_no == 5 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Next
        </button>
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
