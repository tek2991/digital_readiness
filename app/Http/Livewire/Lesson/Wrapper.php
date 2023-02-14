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
        $this->lesson_id = $lesson_id;
    }

    public function render()
    {
        return view('livewire.lesson.wrapper');
    }
}
