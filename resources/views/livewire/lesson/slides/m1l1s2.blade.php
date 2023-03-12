<div id="m1l1s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Overview</h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div>
            <section class="grid grid-cols-1 xl:grid-cols-3 my-12 gap-y-8 xl:gap-x-3">
                <div class="flip-card {{ $flipCards[1] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(1)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/ai.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    Introduction to AI
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">This module serves as an
                                introduction to what AI is and what are the emerging technologies revolving AI
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[2] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(2)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/ai.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    Understanding AI
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">Understand what artificial intelligence is and learn about AI using
                                a no-code AI tool Teachable Machine. Examine and discuss the impacts of AI in the
                                present and the future.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[3] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(3)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/ai.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    Plan AI
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">Learn about the importance of AI Ethics and
                                responsible AI development Devise SMART plans using the SMART goal methodology.
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
        <div>
            @if ($allow_next && $show_next)
                <div class="fixed bottom-0 mx-auto" id="next-btn">
                    <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                        class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                        {{ $complete == true ? 'Introduction to Module 1' : 'Please complete the slide above' }}
                    </button>
                </div>
            @else
            @endif
        </div>
    </div>
</div>
