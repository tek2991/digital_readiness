<?php

namespace App\Http\Livewire\Lesson;

use App\Models\Lesson;
use App\Models\Module;
use Livewire\Component;

class M1l1 extends Component
{
    public $module;
    public $lesson;
    public $latest_slide_id;


    public function mount()
    {
        $user = auth()->user();
        $this->module = Module::find(1);
        $this->lesson = $this->module->lessons()->find(1);
        $this->latest_slide_id = $user->lessons->where('id', $this->lesson->id)->first()->pivot->latest_slide_id;

        if ($this->latest_slide_id == null || $this->latest_slide_id == 0) {
            $this->latest_slide_id = $this->lesson->slides()->orderBy('order')->first()->id;

            $user->lessons()->updateExistingPivot($this->lesson->id, [
                'latest_slide_id' => $this->latest_slide_id,
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
            'latest_slide_id' => $slide_id,
        ]);
        $this->latest_slide_id = $slide_id;

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
        return view('livewire.lesson.m1l1');
    }
}
