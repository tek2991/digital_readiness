<!DOCTYPE html>
<html lang="en" class="scroll-smooth">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Readiness</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
    {{-- <script>document.documentElement.classList.add('js')</script> --}}
</head>

<body>
    @include('layouts.course-nav')
    <div class="container relative mx-auto sm:flex">
        @livewire('course-aside')
        <div class="h-screen w-full overflow-y-scroll hide-scroll pt-28 pb-16" id="lesson">
            @livewire('lesson.wrapper')
        </div>
    </div>
    @livewireScripts
    @livewire('livewire-ui-modal')
    {{-- <script src="{{ asset('scripts/taos.js') }}"></script> --}}

    <script>
        function copyWidth() {
            const sourceElem = document.getElementById('lesson');
            const destElem = document.getElementById('next-btn');
            const sourceWidth = sourceElem.offsetWidth;
            destElem.style.width = `${sourceWidth}px`;
        }

        document.addEventListener("DOMContentLoaded", copyWidth);
        document.addEventListener('DOMSubtreeModified', copyWidth);
        window.addEventListener("resize", copyWidth);
        // call adjustHeight
        setTimeout(copyWidth, 100);
    </script>
</body>

</html>
