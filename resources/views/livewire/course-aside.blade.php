<aside id="sidebar-multi-level-sidebar"
    class="fixed sm:sticky top-0 sm:mt-24 left-0 z-40 w-80 h-screen sm:aside-height transition-transform sm:transition-none -translate-x-full sm:translate-x-0"
    aria-label="Sidebar">
    <div class="h-full px-3 sm:pl-0 py-4 overflow-y-auto bg-white border-r dark:bg-gray-800">
        <div class="space-y-2">
            <div>
                <div class="w-full h-28 rounded flex flex-col items-center justify-between text-white text-2xl font-intelmedium py-3"
                    style="
                            background: linear-gradient(0deg, rgba(35, 35, 35, 0.4), rgba(35, 35, 35, 0.4)), url('{{ asset('images/ai.jpg') }}');
                            background-size: cover; background-position: center; background-repeat: no-repeat;">
                    <h1>
                        Digital Readiness
                    </h1>
                    <div class="w-9/12 bg-gray-400 rounded-full h-1 my-2">
                        <div class="bg-white h-1 rounded-full" style="width: {{ $progress }}%"></div>
                    </div>
                    <p class="text-sm">
                        {{ $progress }}% Completed
                    </p>
                </div>
            </div>
            <div>
                <div id="accordion-flush" data-accordion="collapse" wire:ignore.self
                    data-active-classes="bg-white"
                    data-inactive-classes="bg-white">
                    @foreach ($modules as $module)
                        <h2 id="accordion-{{ $module->id }}" wire:ignore>
                            <button type="button"
                                class="flex items-center justify-between w-full py-5 font-medium text-left border-b border-gray-200"
                                data-accordion-target="#accordion-flush-body-{{ $module->id }}" aria-expanded="true"
                                aria-controls="accordion-flush-body-{{ $module->id }}">
                                <span class="text-intelblue text-lg">{{ $module->name }}</span>
                                <svg data-accordion-icon class="w-6 h-6 rotate-180 shrink-0" fill="currentColor"
                                    viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                    <path fill-rule="evenodd"
                                        d="M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z"
                                        clip-rule="evenodd"></path>
                                </svg>
                            </button>
                        </h2>
                        <div id="accordion-flush-body-{{ $module->id }}" class="hidden" wire:ignore.self
                            aria-labelledby="accordion-{{ $module->id }}">
                            <div class="py-1 font-light border-b border-gray-200 dark:border-gray-700" wire:ignore.self>
                                <ul class="pl-3 text-sm" wire:ignore.self>
                                    @foreach ($module->lessons as $lesson)
                                        <button class="cursor-pointer text-left w-full" wire:click="changeLesson({{ $lesson->id }})">
                                            <li
                                                class="flex items-center justify-between w-full hover:bg-intelblue2 {{ $current_lesson->id == $lesson->id ? 'bg-intelblue2' : '' }} rounded-md p-2 my-1">
                                                <span
                                                    class="w-full {{ $lesson->completed || $current_lesson->id == $lesson->id ? 'text-intelblue font-intelmedium' : 'text-gray-600' }}">
                                                    {{ $lesson->name }}
                                                </span>
                                                @if ($lesson->completed)
                                                    <svg xmlns="http://www.w3.org/2000/svg" fill="none"
                                                        viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor"
                                                        class="w-4 h-4 text-green-700">
                                                        <path stroke-linecap="round" stroke-linejoin="round"
                                                            d="M4.5 12.75l6 6 9-13.5" />
                                                    </svg>
                                                @endif
                                            </li>
                                        </button>
                                    @endforeach
                                </ul>
                            </div>
                        </div>
                    @endforeach
                    </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</aside>
