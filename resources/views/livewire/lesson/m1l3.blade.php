<div class="p-4  sm:mx-6 sm:pt-0" id="m1l3">
    @if ($latest_slide_order >= 1)
        @livewire('lesson.slides.m1l3s1', ['latest_slide_order' => $latest_slide_order])
    @endif
    @if ($latest_slide_order >= 2)
        @livewire('lesson.slides.m1l3s2', ['latest_slide_order' => $latest_slide_order])
    @endif
    @if ($latest_slide_order >= 3)
        @livewire('lesson.slides.m1l3s3', ['latest_slide_order' => $latest_slide_order])
    @endif
    @if ($latest_slide_order >= 4)
        @livewire('lesson.slides.m1l3s4', ['latest_slide_order' => $latest_slide_order])
    @endif
    @if ($latest_slide_order >= 5)
        @livewire('lesson.slides.m1l3s5', ['latest_slide_order' => $latest_slide_order])
    @endif
</div>
