<div id="m1l5s1" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    {{-- <h3 class="font-intelmedium text-gray-500 text-lg pb-4">Badge</h3> --}}
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Badge</h1>
    </div>
    <div class="text-gray-700 mt-14" wire:ignore>
        <div id="badge-1" class="w-80 h-80 flex justify-between items-center mx-auto relative cursor-pointer"
            style="background-image: url({{ asset('images/badge.png') }}); background-position: center; background-repeat: no-repeat; background-size: contain;">
            <div class="h-full w-full px-10 pt-16 pb-10">
                <div class="w-full h-full">
                    <div class="h-2/5 flex flex-col justify-between">
                        <h4 class="font-intelmedium text-lg text-center pt-3">
                            {{ $user->name }}
                        </h4>
                        <h4 class="font-intelbold text-2xl text-center">
                            AI DEMYSTIFIED
                        </h4>
                    </div>
                    <div class="h-1/2 flex flex-col justify-between">
                        <h4 class="font-intelbold text-2xl text-center">
                            {{ $user->email_verified_at->format('Y') }}
                        </h4>
                        <div class="w-36 h-16 pb-4 mx-auto flex items-end">
                            <img src="{{ asset('images/logo.png') }}" alt="" class="object-scale-down">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                {{ $complete == true ? 'Next Module...' : 'Please complete the avtivity above' }}
            </button>
        @else
        @endif
    </div>

    <script src="{{ asset('scripts/html2canvas.min.js') }}"></script>
    <script>
        function convertToImage() {
            // Get the element to be converted
            const element = document.getElementById("badge-1");

            // Create a canvas element
            const canvas = document.createElement("canvas");

            // Set the canvas dimensions to match the element
            canvas.width = element.clientWidth;
            canvas.height = element.clientHeight;

            // Get the canvas context
            const context = canvas.getContext("2d");

            // Use html2canvas to capture the element as an image
            html2canvas(element).then(function(canvas) {
                // Draw the captured image onto the canvas
                context.drawImage(canvas, 0, 0);

                // Convert the canvas to an image
                const image = canvas.toDataURL("image/png");

                // Open the image in a new window/tab
                window.open(image);
            });
        }

        document.getElementById("badge-1").addEventListener("click", convertToImage);
    </script>
</div>
