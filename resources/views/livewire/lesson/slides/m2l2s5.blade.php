<div id="m2l2s5" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Stepwise working of Teachable Machine
        </h1>
    </div>
    <div class="text-gray-700 mt-14">
        @if ($part_no == 1)
            <div class="grid grid-cols-3 gap-3">
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium animate-left-slow">Gathering Data</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover animate-left-slow-2">
                    </div>
                </div>
            </div>

            <div class="mt-12 animate-top-slow">
                <p class="text-lg font-intelmedium text-center">
                    Gather and group your examples into classes, or categories, that you want the computer to learn
                </p>
                <p class="text-lg font-intelmedium text-center">
                    Upload your image files, or capture them live with a mic or webcam
                </p>
            </div>

            <div class="h-64 w-full mx-auto mt-12">
                <img src="{{ asset('images/course/teachable_dog_1.png') }}" alt=""
                    class="w-full h-full object-scale-down animate-top-right-2">
            </div>
        @endif
        @if ($part_no == 2)
            <div class="grid grid-cols-3 gap-3">
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium">Gathering Data</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium animate-left-slow">Training the Model</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover animate-left-slow-2">
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <p class="text-lg font-intelmedium text-center animate-top-slow">
                    Click on- train model, and tensorflow.js starts training a neural network in your browser
                </p>
                <p class="text-lg font-intelmedium text-center">
                    &nbsp;
                </p>
            </div>

            <div class="h-64 w-full mx-auto mt-12">
                <img src="{{ asset('images/course/teachable_dog_2.png') }}" alt=""
                    class="w-full h-full object-scale-down animate-top-right-2">
            </div>
        @endif
        @if ($part_no == 3)
            <div class="grid grid-cols-3 gap-3">
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium">Gathering Data</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium">Training the Model</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover">
                    </div>
                </div>
                <div class="grid grid-cols-9">
                    <div class="col-span-7 w-full h-full rounded flex justify-center items-center"
                        style="background-color: #70ad47;">
                        <p class="text-white font-xl font-intelmedium animate-left-slow">Deploying Model</p>
                    </div>
                    <div class="col-span-2">
                        <img src="{{ asset('images/course/green_arrow.png') }}" alt=""
                            class="w-3/4 mx-auto h-full object-cover animate-left-slow-2">
                    </div>
                </div>
            </div>

            <div class="mt-12">
                <p class="text-lg font-intelmedium text-center animate-top-slow">
                    In the output, you can see the model classification with percentage and export the model with a
                    sharable link
                <p class="text-lg font-intelmedium text-center">
                    &nbsp;
                </p>
            </div>

            <div class="h-64 w-full mx-auto mt-12 ">
                <img src="{{ asset('images/course/teachable_dog_3.png') }}" alt=""
                    class="w-full h-full object-scale-down animate-top-right-2">
            </div>
        @endif
    </div>
    <div class="mt-14 grid grid-cols-2 gap-x-8">
        <button wire:click="prevStep" {{ $part_no == 1 ? 'disabled' : '' }}
            class="{{ $part_no == 1 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
            Prev
        </button>
        <button wire:click="nextSlide" {{ $part_no == 3 ? 'disabled' : '' }}
            class="{{ $part_no == 3 ? 'bg-gray-400' : 'bg-intelblue' }} text-white font-intelmedium text-xl p-2 rounded-lg lg:mt-6 w-full">
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
