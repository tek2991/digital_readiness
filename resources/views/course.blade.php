<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Digital Readiness</title>

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @livewireStyles
</head>

<body class="">
    @include('layouts.course-nav')
    <div class="container relative mx-auto sm:flex">
        {{-- @include('layouts.course-aside') --}}
        <livewire:course-aside />

        <div class="h-screen w-full overflow-y-scroll hide-scroll pt-24">
            <div class="h-screen bg-red-500 w-full ">
    
            </div>
            <div class="h-screen bg-blue-500 w-full ">
    
            </div>
            <div class="h-screen bg-red-500 w-full ">
    
            </div>
        </div>
    </div>
    @livewireScripts
    @livewire('livewire-ui-modal')
</body>

</html>