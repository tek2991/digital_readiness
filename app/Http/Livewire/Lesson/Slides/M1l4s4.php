<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l4s4 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 4;

    public $qa_states = [
        'question1' => false,
        'question2' => false,
        'question3' => false,

        'answer1' => false,
        'answer2' => false,
        'answer3' => false,
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

    protected $listeners = [
        'correct' => 'correct',
    ];

    public function correct($questionId, $answerId){
        $this->qa_states[$questionId] = true;
        $this->qa_states[$answerId] = true;

        if($this->qa_states['question1'] && $this->qa_states['question2'] && $this->qa_states['question3']){
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
        $this->emitTo('lesson.m1l4', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l4s4');
    }
}
