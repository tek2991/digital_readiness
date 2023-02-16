<div>
    @if ($lesson_id == 1)
        @livewire('lesson.m1l1')
    @elseif ($lesson_id == 2)
        @livewire('lesson.m1l2')
    @elseif ($lesson_id == 3)
        @livewire('lesson.m1l3')
    @endif
</div>
