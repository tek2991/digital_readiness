<?php

namespace App\Http\Livewire\Lesson;

use Livewire\Component;

class Wrapper extends Component
{
    public $lesson_id;

    public function mount()
    {
        $user = auth()->user();
        $this->lesson_id = $user->lessons->where('pivot.completed', 1)->last() ? $user->lessons->where('pivot.completed', 1)->last()->id : 1;
    }

    // listeners
    protected $listeners = [
        'showLesson' => 'showLesson',

    ];

    public function showLesson($lesson_id)
    {
        $previousLessonCompleted = $lesson_id == 1 ? true : $this->previousLessonCompleted($lesson_id);
        if ($previousLessonCompleted) {
            $this->lesson_id = $lesson_id;
        }
        $this->emitTo('course-aside', 'changeLesson', $lesson_id);
    }

    public function previousLessonCompleted($lesson_id)
    {
        $user = auth()->user();
        $lesson = $user->lessons->where('id', $lesson_id - 1)->first();
        if ($lesson) {
            return $lesson->pivot->completed;
        }
        return false;
    }

    public function render()
    {
        return view('livewire.lesson.wrapper');
    }
}
