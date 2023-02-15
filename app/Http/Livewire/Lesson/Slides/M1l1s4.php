<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l1s4 extends Component
{
    public $latest_slide_id;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;
    public $loaded = false;

    public $slide_id = 4;

    public function mount($latest_slide_id)
    {
        $this->latest_slide_id = $latest_slide_id;

        if($this->latest_slide_id >= $this->slide_id) {
            $this->allow_next = true;
        }

        $this->complete = true;

        if($this->latest_slide_id > $this->slide_id) {
            $this->show_next = false;
        }

        if($this->latest_slide_id == $this->slide_id) {
            $this->current_slide = true;
        }
    }

    public function nextSlide()
    {
        $this->latest_slide_id = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m1l1', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l1s4');
    }
}
