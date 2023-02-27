<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M2l4s1 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 1;

    public $user;

    public function mount($latest_slide_order)
    {
        $this->latest_slide_order = $latest_slide_order;

        if($this->latest_slide_order >= $this->slide_id) {
            $this->allow_next = true;
        }

        if($this->latest_slide_order > $this->slide_id) {
            $this->show_next = false;
        }

        if($this->latest_slide_order == $this->slide_id) {
            $this->current_slide = true;
        }

        $this->completeSlide();

        $this->user = auth()->user();
    }

    protected $listeners = [
    ];

    public function completeSlide(){
        $this->complete = true;
    }

    public function nextSlide()
    {
        $this->nextLesson();
    }


    public function nextLesson()
    {
        $this->emitTo('lesson.m2l4', 'nextLesson');
    }

    public function render()
    {
        return view('livewire.lesson.slides.m2l4s1');
    }
}
