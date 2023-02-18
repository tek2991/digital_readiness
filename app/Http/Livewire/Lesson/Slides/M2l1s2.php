<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M2l1s2 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 2;

    public $part2 = false;


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

        if($this->latest_slide_order > $this->slide_id) {
            $this->part2 = true;
        }
    }

    protected $listeners = [
    ];

    public function completeSlide(){
        $this->complete = true;
    }



    public function nextSlide()
    {
        if($this->part2 == false){
            $this->part2 = true;
            return;
        }
        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m2l1', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m2l1s2');
    }
}
