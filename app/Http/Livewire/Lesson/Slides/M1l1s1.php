<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l1s1 extends Component
{
    public $latest_slide_id;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;

    public function mount($latest_slide_id)
    {
        $this->latest_slide_id = $latest_slide_id;

        if($this->latest_slide_id >= 1) {
            $this->allow_next = true;
        }

        $this->complete = true;

        if($this->latest_slide_id > 1) {
            $this->show_next = false;
        }
    }

    public function nextSlide()
    {
        $this->emitTo('lesson.m1l1', 'nextSlide', 2);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l1s1');
    }
}
