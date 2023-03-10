<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l3s8  extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 8;

    public $answer = 2;
    public $selectedAnswer;

    public function mount($latest_slide_order)
    {
        $this->latest_slide_order = $latest_slide_order;

        if($this->latest_slide_order >= $this->slide_id) {
            $this->allow_next = true;
        }

        // $this->complete = true;

        if($this->latest_slide_order > $this->slide_id) {
            $this->show_next = false;
            $this->selectedAnswer = $this->answer;
        }

        if($this->latest_slide_order == $this->slide_id) {
            $this->current_slide = true;
        }

        $user = auth()->user();
        $lesson_id = 3;

        // Check if user has completed this lesson
        $completed = $user->lessons()->where('lesson_id', $lesson_id)->where('completed', 1)->first();

        if($completed) {
            $this->complete = true;
            $this->selectedAnswer = $this->answer;
        }
    }

    public function checkAnswer($ans){
        $this->selectedAnswer = $ans;

        if($this->selectedAnswer == $this->answer){
            $this->complete = true;
        }
    }

    public function nextSlide()
    {
        $this->nextLesson();
    }


    public function nextLesson()
    {
        $this->emitTo('lesson.m1l3', 'nextLesson');
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l3s8');
    }
}
