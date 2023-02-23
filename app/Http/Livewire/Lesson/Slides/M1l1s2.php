<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l1s2 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 2;

    public $flipCards = [
        1 => false,
        2 => false,
        3 => false,
    ];

    public $fliped = [
        1 => false,
        2 => false,
        3 => false,
    ];

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
    }

    public function nextSlide()
    {
        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m1l1', 'nextSlide', $this->slide_id + 1);
    }

    public function flipCard($card)
    {
        $this->flipCards[$card] = !$this->flipCards[$card];

        if($this->flipCards[$card]) {
            $this->fliped[$card] = true;
        }

        if($this->fliped[1] && $this->fliped[2] && $this->fliped[3]) {
            $this->complete = true;
        }
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l1s2');
    }
}
