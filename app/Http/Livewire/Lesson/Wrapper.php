<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Lesson;
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
        'loadLesson' => 'loadLesson',
    ];

    public function showLesson($lesson_id)
    {
        $previousLessonCompleted = $lesson_id == 1 ? true : $this->previousLessonCompleted($lesson_id);
        if ($previousLessonCompleted) {
            $this->lesson_id = $lesson_id;
        }
        $this->emitTo('course-aside', 'changeLesson', $lesson_id);

        $module_id = Lesson::find($lesson_id)->module->id;
        $this->dispatchBrowserEvent('mls:scroll-to', [
            'query' => '#m' . $module_id . 'l' . $lesson_id . 's1',
        ]);
    }

    public function loadLesson($lesson_id)
    {
        $this->lesson_id = $lesson_id;
    }

    public function previousLessonCompleted($lesson_id)
    {
        $user = auth()->user();
        $lesson = $user->lessons->where('id', $lesson_id)->first();
        $previous_lesson_exists = $user->lessons->where('order', $lesson->order - 1)->first();
        if ($previous_lesson_exists) {
            $previous_lesson = $user->lessons->where('order', $lesson->order - 1)->first();
            return $previous_lesson->pivot->completed;
        } else {
            return true;
        }
    }

    public function render()
    {
        return view('livewire.lesson.wrapper');
    }
}
