<div class="p-4  sm:mx-6 sm:pt-0">
    @if ($latest_slide_id >= 1)
        {{-- @livewire('lesson.slides.m1l1s1', ['latest_slide_id' => $latest_slide_id]) --}}
    @endif
    @if ($latest_slide_id >= 2)
        {{-- @livewire('lesson.slides.m1l1s2', ['latest_slide_id' => $latest_slide_id]) --}}
    @endif
    @if ($latest_slide_id >= 3)
        @livewire('lesson.slides.m1l1s3', ['latest_slide_id' => $latest_slide_id])
    @endif
</div>
