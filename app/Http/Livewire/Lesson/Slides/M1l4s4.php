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

        $user = auth()->user();
        $lesson_id = 4;

        // Check if user has completed this lesson
        $completed = $user->lessons()->where('lesson_id', $lesson_id)->where('completed', 1)->first();

        if($completed) {
            $this->qa_states['question1'] = true;
            $this->qa_states['question2'] = true;
            $this->qa_states['question3'] = true;

            $this->qa_states['answer1'] = true;
            $this->qa_states['answer2'] = true;
            $this->qa_states['answer3'] = true;
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
        $this->nextLesson();
    }


    public function nextLesson()
    {
        $this->emitTo('lesson.m1l4', 'nextLesson');
    }

    public function render()
    {
        return view('livewire.lesson.slides.m1l4s4');
    }
}
