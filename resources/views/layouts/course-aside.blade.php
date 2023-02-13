<aside id="sidebar-multi-level-sidebar"
    class="fixed sm:sticky top-0 sm:mt-24 left-0 z-40 w-80 h-screen sm:aside-height transition-transform sm:transition-none -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 sm:pl-0 py-4 overflow-y-auto bg-white border-r dark:bg-gray-800">
        <ul class="space-y-2">
            <li>
                <div class="w-full h-28 rounded flex flex-col items-center justify-between text-white text-2xl font-intelmedium py-3"
                    style="
                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url('{{ asset('images/ai.jpg') }}');
                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h1>
                        Digital Readiness
                    </h1>
                    <div class="w-9/12 bg-gray-400 rounded-full h-1 my-2">
                        <div class="bg-white h-1 rounded-full" style="width: {{ 45 }}%"></div>
                    </div>
                    <p class="text-sm">
                        {{ 45 }}% Completed
                    </p>
                </div>
            </li>
            <li>
                <div id="accordion-flush" data-accordion="collapse"
                    data-active-classes="bg-white text-intelblue font-intelmedium text-lg"
                    data-inactive-classes="font-intelregular">

                    <h2 id="accordion-flush-heading-1">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                            data-accordion-target="#accordion-flush-body-1" aria-expanded="true"
                            aria-controls="accordion-flush-body-1">
                            <span>Introduction to AI</span>
                            <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-1" class="hidden" aria-labelledby="accordion-flush-heading-1">
                        <div class="py-3 font-light border-b border-gray-200 dark:border-gray-700">
                            <ul class="pl-3 text-sm">
                                <li class="flex items-center justify-between my-2">
                                    <span class="pr-2 text-intelblue font-intelmedium">
                                        What is Artificial Intelligence?
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 text-green-700">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </li>
                                <li class="flex items-center justify-between my-2">
                                    <span class="pr-2 text-gray-600">
                                        Can a machine also do these things?
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <h2 id="accordion-flush-heading-2">
                        <button type="button"
                            class="flex items-center justify-between w-full py-5 font-medium text-left text-gray-500 border-b border-gray-200"
                            data-accordion-target="#accordion-flush-body-2" aria-expanded="false"
                            aria-controls="accordion-flush-body-2">
                            <span>Understanding AI</span>
                            <svg data-accordion-icon class="w-6 h-6 shrink-0" fill="currentColor" viewBox="0 0 20 20"
                                xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd"
                                    d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                    clip-rule="evenodd"></path>
                            </svg>
                        </button>
                    </h2>
                    <div id="accordion-flush-body-2" class="hidden" aria-labelledby="accordion-flush-heading-2">
                        <div class="py-5 font-light border-b border-gray-200">
                            <ul class="pl-3 text-sm">
                                <li class="flex items-center justify-between my-2">
                                    <span class="pr-2 text-gray-600">
                                        Can a machine also do these things?
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </li>
                                <li class="flex items-center justify-between my-2">
                                    <span class="pr-2 text-gray-600">
                                        Can a machine also do these things?
                                    </span>
                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24"
                                        stroke-width="1.5" stroke="currentColor" class="w-4 h-4 hidden">
                                        <path stroke-linecap="round" stroke-linejoin="round"
                                            d="M4.5 12.75l6 6 9-13.5" />
                                    </svg>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</aside>
