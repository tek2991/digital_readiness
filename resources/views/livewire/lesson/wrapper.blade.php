<div>
    <div class="mx-auto p-2 bg-black text-white rounded-xl max-w-sm text-center">
        Lesson ID: {{ $lesson_id }}
    </div>
    @if ($lesson_id == 1)
        @livewire('lesson.m1l1')
    @endif
</div>
