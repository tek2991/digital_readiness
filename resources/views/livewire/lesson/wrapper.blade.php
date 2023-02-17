<div>
    @if ($lesson_id == 1)
        @livewire('lesson.m1l1')
    @elseif ($lesson_id == 2)
        @livewire('lesson.m1l2')
    @elseif ($lesson_id == 3)
        @livewire('lesson.m1l3')
    @elseif ($lesson_id == 4)
        @livewire('lesson.m1l4')
    @elseif ($lesson_id == 5)
        @livewire('lesson.m2l1')
    @endif
</div>
