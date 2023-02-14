<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l1s2 extends Component
{
    public $latest_slide_id;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;

    public function mount($latest_slide_id)
    {
        $this->latest_slide_id = $latest_slide_id;

        if($this->latest_slide_id >= 2) {
            $this->allow_next = true;
        }

        $this->complete = true;

        if($this->latest_slide_id > 2) {
            $this->show_next = false;
        }
    }

    public function nextSlide()
    {
        $this->emitTo('lesson.m1l1', 'nextSlide', 3);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l1s2');
    }
}
