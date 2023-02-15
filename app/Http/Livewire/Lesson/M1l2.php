<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Lesson;
use App\Models\Module;
use Livewire\Component;

class M1l2 extends Component
{
    public $module;
    public $lesson;
    public $latest_slide_order;
    public $module_id = 1;
    public $lesson_id = 2;


    public function mount()
    {
        $user = auth()->user();
        $this->module = Module::find($this->module_id);
        $this->lesson = $this->module->lessons()->find($this->lesson_id);
        $this->latest_slide_order = $user->lessons->where('id', $this->lesson->id)->first()->pivot->latest_slide_order;

        if ($this->latest_slide_order == null || $this->latest_slide_order == 0) {
            $this->latest_slide_order = $this->lesson->slides()->orderBy('order')->first()->order;

            $user->lessons()->updateExistingPivot($this->lesson->id, [
                'latest_slide_order' => $this->latest_slide_order,
            ]);
        }
    }

    // listeners
    protected $listeners = [
        'nextSlide' => 'nextSlide',
    ];

    public function nextSlide($slide_id)
    {
        $user = auth()->user();
        $user->lessons()->updateExistingPivot($this->lesson->id, [
            'latest_slide_order' => $slide_id,
        ]);
        $this->latest_slide_order = $slide_id;

        $this->scroll($slide_id);
    }

    public function scroll($slide_id)
    {
        $query = "#m1l1s{$slide_id}";
        $this->dispatchBrowserEvent('mls:scroll-to', [
            'query' => $query,
        ]);
    }

    public function render()
    {
        return view('livewire.lesson.m1l2');
    }
}
