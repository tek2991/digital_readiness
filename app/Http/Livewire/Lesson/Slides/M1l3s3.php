<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l3s3 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 3;

    public $answer = [1, 2];

    public $selectedAnswers = [];

    public function mount($latest_slide_order)
    {
        $this->latest_slide_order = $latest_slide_order;

        if($this->latest_slide_order >= $this->slide_id) {
            $this->allow_next = true;
        }

        // $this->complete = true;

        if($this->latest_slide_order > $this->slide_id) {
            $this->show_next = false;
            $this->selectedAnswers = $this->answer;
        }

        if($this->latest_slide_order == $this->slide_id) {
            $this->current_slide = true;
        }
    }

    public function addToAnswer($ans){
        // $this->selectedAnswer = $ans;
        if(!in_array($ans, $this->selectedAnswers)){
            array_push($this->selectedAnswers, $ans);
        }

        if(count($this->selectedAnswers) == count($this->answer)){
            $this->complete = true;
        }
    }

    public function nextSlide()
    {
        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m1l3', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l3s3');
    }
}
