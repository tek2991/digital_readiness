<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M2l1s3 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 3;

    public $part_no = 1;

    public $classes = 'hidden';


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

    protected $listeners = [
    ];

    public function completeSlide(){
        $this->complete = true;
    }

    public function prevStep(){
        if($this->part_no > 1){
            $this->part_no--;
        }
    }

    public function nextSlide()
    {
        if($this->part_no < 5){
            $this->part_no++;
            if($this->part_no == 5){
                $this->completeSlide();
            }
            return;
        }


        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m2l1', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m2l1s3');
    }
}
