<div id="m1l4s3" class="pt-36 {{ $current_slide ? 'min-h-screen' : '' }}">
    <h3 class="font-intelmedium text-gray-500 text-lg pb-4">AI Case Study</h3>
    <div class="border-b-2 border-secondary w-fit">
        <h1 class="font-intelbold text-intelblue text-3xl pb-2">Project Drowsiness Monitor</h1>
    </div>
    <div class="text-gray-700 mt-14">
        <div class="mb-4">
            <img src="{{ asset('images/squares-nobg.png') }}" alt="">
        </div>
        <div class="xl:flex mt-14 justify-around items-center">
            <div class="max-w-md">
                <ul class="pl-5 pr-3">
                    <li class="mb-4">
                        <span class="inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-secondary mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M12 9v3.75m9-.75a9 9 0 11-18 0 9 9 0 0118 0zm-9 3.75h.008v.008H12v-.008z" />
                                </svg>
                            </div>
                            Problem: In many countries, bus drives falling asleep on the wheel is big concern and
                            probable
                        </span>
                    </li>
                    <li class="mb-4">
                        <span class="inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                            </div>
                            Solution: Project Drowsiness Monitor
                        </span>
                    </li>
                    <li class="">
                        <span class="inline-flex">
                            <div>
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                    stroke-width="1.5" stroke="currentColor" class="w-6 h-6 text-intelblue mr-2">
                                    <path stroke-linecap="round" stroke-linejoin="round"
                                        d="M9 12.75L11.25 15 15 9.75m-3-7.036A11.959 11.959 0 013.598 6 11.99 11.99 0 003 9.749c0 5.592 3.824 10.29 9 11.623 5.176-1.332 9-6.03 9-11.622 0-1.31-.21-2.571-.598-3.751h-.152c-3.196 0-6.1-1.248-8.25-3.285z" />
                                </svg>
                            </div>
                            Khushi Pandey and Bhumika Sharma from New Delhi worked on a solution to the problem
                        </span>
                    </li>
                </ul>
            </div>
            <div class="w-full max-w-xl mx-auto mt-6 xl:mt-0">
                <div class="video-container">
                    <iframe src="https://www.youtube.com/embed/qsb27DkqDlA?start=1" title="YouTube video player"
                        frameborder="0"
                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                        allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-14">
        @if ($allow_next && $show_next)
            <div class="fixed bottom-0 mx-auto" id="next-btn">
                <button wire:click="nextSlide" {{ $complete == true ? '' : 'disabled' }}
                    class="{{ $complete == true ? 'bg-intelblue animate-bounce' : 'bg-gray-400' }} text-white font-intelmedium text-xl p-4 rounded-lg lg:mt-6 w-full">
                    {{ $complete == true ? 'Continue...' : 'Please complete the video above' }}
                </button>
            </div>
        @else
        @endif
    </div>

    <script></script>
</div>
