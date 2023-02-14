<div class="p-4  sm:mx-6 sm:pt-0">
    @for ($i = 1; $i <= $latest_slide_id; $i++)
        @php
            $slide = 'lesson.slides.m1l1s' . $i;
        @endphp
        @livewire($slide, ['latest_slide_id' => $latest_slide_id])
    @endfor
</div>
