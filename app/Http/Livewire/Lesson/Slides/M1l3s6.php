<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l3s6 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 6;

    public $qa_states = [
        'question1' => false,
        'question2' => false,

        'answer1' => false,
        'answer2' => false,
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

        $user = auth()->user();
        $lesson_id = 4;

        // Check if user has completed this lesson
        $completed = $user->lessons()->where('lesson_id', $lesson_id)->where('completed', 1)->first();

        if($completed) {
            $this->qa_states['question1'] = true;
            $this->qa_states['question2'] = true;

            $this->qa_states['answer1'] = true;
            $this->qa_states['answer2'] = true;

            $this->complete = true;
        }
    }

    public function correct($questionId, $answerId){
        $this->qa_states[$questionId] = true;
        $this->qa_states[$answerId] = true;

        if($this->qa_states['question1'] && $this->qa_states['question2']){
            $this->completeSlide();
        }
    }

    public function completeSlide(){
        $this->complete = true;
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
        return view('livewire.lesson.slides.m1l3s6');
    }
}
