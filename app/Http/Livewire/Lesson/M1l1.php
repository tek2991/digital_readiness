<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Lesson;
use App\Models\Module;
use Livewire\Component;

class M1l1 extends Component
{
    public $module;
    public $lesson;

    public $lesson_complete;

    public function mount()
    {
        $user = auth()->user();
        $this->module = Module::find(1);
        $this->lesson = $this->module->lessons()->find(1);
        $this->lesson_complete = $user->lessons->where('id', $this->lesson->id)->first()->pivot->complete;
    }

    public function render()
    {
        return view('livewire.lesson.m1l1');
    }
}
