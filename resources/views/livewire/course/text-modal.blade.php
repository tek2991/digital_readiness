<div class="w-full mx-auto no-modal-bg">
    <div class="w-full h-full bg-gray-700 rounded-2xl px-4 py-2.5 cursor-pointer">
        <div class="h-full w-full bg-slate-600 rounded-2xl flex flex-col items-center justify-center">
            <h2 class="text-white font-intelmedium text-2xl pt-2">
                {{ $title }}
            </h2>
            <p class="text-white font-intelregular text-lg pt-2">
                {{ $body }}
            </p>
        </div>
    </div>

    <style>
        #modal-container {
            background-color: rgba(0, 0, 0, 0.0);
        }
    </style>
</div>
