<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l2s1 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 1;

    public $flipCards = [
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
    ];

    public $fliped = [
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
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

    public function flipCard($card)
    {
        $this->flipCards[$card] = !$this->flipCards[$card];

        if($this->flipCards[$card]) {
            $this->fliped[$card] = true;
        }

        if($this->fliped[1] && $this->fliped[2] && $this->fliped[3] && $this->fliped[4] && $this->fliped[5] && $this->fliped[6]) {
            $this->complete = true;
        }
    }

    public function nextSlide()
    {
        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m1l2', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l2s1');
    }
}
