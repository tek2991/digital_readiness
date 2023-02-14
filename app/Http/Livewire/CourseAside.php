<?php

namespace App\Http\Livewire;

use App\Models\Lesson;
use App\Models\Module;
use Livewire\Component;

class CourseAside extends Component
{
    public $modules;

    public $progress;

    public $current_lesson;
    public $current_module;

    public function mount()
    {
        $this->modules = Module::with('lessons')->orderBy('order')->get();
        $this->syncCompletedLessons();
        $this->current_lesson = Lesson::find(1);
    }

    public function syncCompletedLessons()
    {
        $user = auth()->user();
        $user_lessons = $user->lessons;
        foreach ($this->modules as $module) {
            foreach ($module->lessons as $lesson) {
                $lesson->completed = $user_lessons->where('id', $lesson->id)->first()->pivot->completed;
                // if($lesson->completed){
                //     $this->current_lesson = $lesson;
                //     $this->current_module = $module;
                // }
            }
        }
        $total_lessons = $user_lessons->count();
        $completed_lessons = $user_lessons->where('pivot.complete', true)->count();
        $this->progress = round($completed_lessons / $total_lessons * 100);
    }

    // listeners
    protected $listeners = [
        'lessonCompleted' => 'syncCompletedLessons',
    ];

    public function changeLesson($lesson_id)
    {
        $this->current_lesson = Lesson::find($lesson_id);
        $this->syncCompletedLessons();
    }

    public function render()
    {
        return view('livewire.course-aside');
    }
}
