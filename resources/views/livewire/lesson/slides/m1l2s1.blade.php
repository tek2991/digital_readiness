<div id="m1l2s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Influence of AI on the present
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div>
            <section class="grid grid-cols-1 xl:grid-cols-3 my-12 gap-y-8 xl:gap-x-3">
                <div class="flip-card {{ $flipCards[1] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(1)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_in_education.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in Education </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">AI is enabling students find the colleges that best match their
                                interests, and AI is also assisting students and teachers solve problems quickly
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[2] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(2)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_in_gaming.gif') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in Gaming
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">AI helps players learn mental games like chess faster by analyzing
                                the patterns of a board and suggesting better moves to play
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[3] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(3)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_in_traffic.png') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in Traffic Management </h1>
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
                <div class="flip-card {{ $flipCards[4] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(4)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_in_driving.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in self-driving cars </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">      Using deep learning, an autonomous vehicle can sense its
                                environment and operate without human involvement
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[5] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(5)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_in_health.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in Healthcare
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">AI is assisting doctors in making better diagnoses, especially for
                                diseases that require visual examinations
                            </p>
                        </div>
                    </div>
                </div>
                <div class="flip-card {{ $flipCards[6] == 1 ? 'flip' : '' }} w-full h-56">
                    <div class="flip-card-inner cursor-pointer" wire:click="flipCard(6)">
                        <div class="flip-card-front w-full h-full absolute rounded-lg shadow-lg">
                            <div class="w-full h-full rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                                style="
                                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url({{ url('/images/course/ai_industry.jpg') }});
                                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                                <h1 class="animate-opacity-fast">
                                    AI in manufacturing industry
                                </h1>
                            </div>
                        </div>
                        <div
                            class="flip-card-back w-full h-full absolute flex items-center p-4 px-6 bg-intelblue2 rounded-lg shadow-lg">
                            <p class="text-gray-700">AI-infused automation machines are making labour work faster,
                                cheaper and more efficient
                            </p>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide"
                class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                Lets find out more...
            </button>
        @else
        @endif
    </div>
</div>
