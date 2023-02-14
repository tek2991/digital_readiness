<div id="m1l1s2" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Overview</h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div>
            <section class="grid grid-cols-1 xl:grid-cols-3 my-12 gap-y-8 xl:gap-x-3">
                <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col">
                    <div class="w-full h-32 rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                        style="
                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url('http://localhost:8000/images/ai.jpg');
                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <h1>
                            Introduction to AI
                        </h1>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm text-justify">This module serves as an
                            introduction to what AI is and what are the emerging technologies revolving AI
                        </p>
                    </div>
                </div>
                <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col">
                    <div class="w-full h-32 rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                        style="
                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url('http://localhost:8000/images/ai.jpg');
                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <h1>
                            Understanding AI
                        </h1>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm text-justify">Understand what is inside Artificial
                            Intelligence and learn about AI tools - Teachable Machine/ Intel DevCloud/ Intel OpenVINO
                            Examine and discuss the impacts of AI in present and in the future
                        </p>
                    </div>
                </div>
                <div class="max-w-sm mx-auto bg-white border border-gray-200 rounded-lg shadow-md h-full flex flex-col">
                    <div class="w-full h-32 rounded flex items-center justify-center text-white text-2xl font-intelmedium py-3"
                        style="
                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url('http://localhost:8000/images/ai.jpg');
                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                        <h1>
                            Plan AI
                        </h1>
                    </div>
                    <div class="p-4">
                        <p class="text-gray-700 text-sm text-justify">Learn about the importance of AI Ethics and
                            responsible AI development Devise SMART plans using the SMART goal methodology.
                        </p>
                    </div>
                </div>
            </section>
        </div>
        <div>
            @if ($allow_next && $show_next)
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Learn more about the modules
                </button>
            @else
            @endif
        </div>
    </div>
</div>
