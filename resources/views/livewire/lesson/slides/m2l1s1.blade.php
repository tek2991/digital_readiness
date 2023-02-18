<div id="m2l1s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Module 2</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Types of AI Learning Models</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <section class="grid grid-cols-1 lg:grid-cols-2 my-12 gap-y-8 lg:gap-x-3">
            <div class="flip-card {{ $flipCards[1] == 1 ? 'flip' : '' }} w-full h-96">
                <div class="flip-card-inner cursor-pointer" wire:click="flipCard(1)">
                    <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                        <div
                            class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3">
                            <img src="{{ asset('images/course/supervised.png') }}" alt=""
                                class="h-96 object-scale-down">
                        </div>
                    </div>
                    <div
                        class="flip-card-back w-full h-full absolute flex flex-col justify-center p-4 px-6 bg-intelblue rounded-lg shadow-lg">
                        <p class="text-gray-50 font-intelmedium text-center">In supervised learning, labeled data is used to train AI models. So, AI
                            models acquire training knowledge from labels that the data has already been assigned
                        </p>

                        <p class="text-gray-50 font-intelmedium text-center mt-3">
                            For example, in the example shown here, the fruits are labeled, and hence classification can
                            be done after we have trained an AI model. This is called classification.
                        </p>
                    </div>
                </div>
            </div>
            <div class="flip-card {{ $flipCards[2] == 1 ? 'flip' : '' }} w-full h-96">
                <div class="flip-card-inner cursor-pointer" wire:click="flipCard(2)">
                    <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                        <div
                            class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3">
                            <img src="{{ asset('images/course/unsupervised.png') }}" alt=""
                                class="h-96 object-scale-down">
                        </div>
                    </div>
                    <div
                        class="flip-card-back w-full h-full absolute flex flex-col justify-center p-4 px-6 bg-intelblue rounded-lg shadow-lg">
                        <p class="text-gray-50 font-intelmedium text-center">In unsupervised learning, unlabeled data is used to train AI models. So, AI models identify patterns and similarities in data using different processing techniques
                        </p>

                        <p class="text-gray-50 font-intelmedium text-center mt-3">
                            For example, in the example shown here, the fruits are not labeled, and hence similar looking fruits will be grouped in one cluster. This is called clustering.
                        </p>
                    </div>
                </div>
            </div>
        </section>
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
