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

        $last_completed_lesson = auth()->user()->lessons->where('pivot.completed', 1)->last();
        if($last_completed_lesson) {
            $this->current_lesson = $last_completed_lesson;
        } 
    }

    public function syncCompletedLessons()
    {
        $user = auth()->user();
        $user_lessons = $user->lessons;
        foreach ($this->modules as $module) {
            foreach ($module->lessons as $lesson) {
                $lesson->completed = $user_lessons->where('id', $lesson->id)->first()->pivot->completed;
            }
        }
        $total_lessons = $user_lessons->count();
        $completed_lessons = $user_lessons->where('pivot.completed', 1)->count();
        $this->progress = round($completed_lessons / $total_lessons * 100);
    }

    public function showLesson($lesson_id)
    {
        $this->emit('showLesson', $lesson_id);
    }

    // listeners
    protected $listeners = [
        'lessonCompleted' => 'syncCompletedLessons',
        'changeLesson' => 'changeLesson',
    ];

    public function changeLesson($lesson_id)
    {
        $this->current_lesson = Lesson::find($lesson_id);
        $this->syncCompletedLessons();
        $this->showLesson($lesson_id);
    }

    public function render()
    {
        return view('livewire.course-aside');
    }
}
