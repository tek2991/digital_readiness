<div id="m1l2s10" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">
            Automation vs Artificial Intelligence
        </h1>
    </div>
    <div class="text-gray-700 mt-8">
        <div class="grid grid-cols-2 gap-4 md:gap-y-8">
            <div class="flex items-center justify-center animate-opacity">
                <h3 class="text-2xl font-intelbold text-center text-secondary">Automation</h3>
            </div>
            <div class="flex items-center justify-center animate-opacity">
                <h3 class="text-2xl font-intelbold text-center text-intelblue">Artificial Intelligence</h3>
            </div>

            <div class="bg-secondary rounded w-full h-full flex justify-center items-center animate-top-fast">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    Automation is a way to make machines work on their ownn
                </h3>
            </div>
            <div class="bg-intelblue rounded w-full h-full flex justify-center items-center animate-top-fast">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    AI is a way to make machines think on their own
                </h3>
            </div>

            <div class="bg-secondary rounded w-full h-full flex justify-center items-center animate-top">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    Automation makes physical work easy for humans – lifting, folding, moving, etc. </h3>
            </div>
            <div class="bg-intelblue rounded w-full h-full flex justify-center items-center animate-top">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    AI makes mental work easy for humans – predicting rainy weather, suggesting tasty dishes, etc. </h3>
            </div>

            <div class="bg-secondary rounded w-full h-full flex justify-center items-center animate-top-slow">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    Example: Washing Machine, Shirt folding machine, Printer
            </div>
            <div class="bg-intelblue rounded w-full h-full flex justify-center items-center animate-top-slow">
                <h3 class="text-lg font-intelmedium text-center text-white p-4">
                    Example: Face unlock, Self-driving car, Siri and Alexa
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide"
                    class="animate-bounce bg-intelblue text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    Lets test our knowledge
                </button>
            </div>
        @else
        @endif
    </div>
</div>
