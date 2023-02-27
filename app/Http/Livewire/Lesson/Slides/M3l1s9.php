<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M3l1s9 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 9;


    public function mount($latest_slide_order)
    {
        $this->latest_slide_order = $latest_slide_order;

        if ($this->latest_slide_order >= $this->slide_id) {
            $this->allow_next = true;
        }

        if ($this->latest_slide_order > $this->slide_id) {
            $this->show_next = false;
        }

        if ($this->latest_slide_order == $this->slide_id) {
            $this->current_slide = true;
        }

        $this->completeSlide();
    }

    protected $listeners = [];

    public function completeSlide()
    {
        $this->complete = true;
    }


    public function nextSlide()
    {
        $this->nextLesson();
    }

    public function nextLesson()
    {
        $this->emitTo('lesson.m3l1', 'nextLesson');
    }

    public function render()
    {
        return view('livewire.lesson.slides.m3l1s9');
    }
}
