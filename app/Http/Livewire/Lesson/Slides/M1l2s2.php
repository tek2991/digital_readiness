<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M1l2s2 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 2;

    public $modals = [
        1 => [
            'title' => 'AI produces generalizations',
            'body' => 'AI makes generalization in learning. If it encounters a new scenario, it will try to relate it back to past experiences in order to decide. For example, the autonomous car has driven before in Sydney. It has not driven before in Melbourne. However, it can still relate to its driving in Sydney in order to make decisions for the situation in Melbourne. Another example is face detection. Every face is different, and yet it can understand that there is a face in the image.'
        ],

        2 => [
            'title' => 'AI can do reasoning',
            'body' => 'AI can perform reasoning. It draws conclusions that are relevant and appropriate to the situations. It is much more than just a simple If-Else application. If red, stop. If green, go. It is not as simple as that. It would also analyze the behavior of pedestrians and predict if they would cross the street. It would also predict how long the pedestrian will take to reach in front of the car. Hence, AI is much more than just a simple If-Else.'
        ],

        3 => [
            'title' => 'AI can do Problem-Solving',
            'body' => 'The capacity to respond to change dynamically and apply prior knowledge to solve new and unsolved issues is known as adaptive problem-solving. The AI chooses the optimum course of action in response to a constantly shifting circumstance.'
        ],

        4 => [
            'title' => 'AI can understand language',
            'body' => 'AI can understand languages. It follows the syntax and rules of the languages, just like how we humans understand our languages.
            And the examples of AI application include machine learning, computer vision, natural language processing, pattern recognition and knowledge management. 
            Take some time to read through this information.'
        ]
    ];

    public $opened = [ 
        1 => false,
        2 => false,
        3 => false,
        4 => false,
    ];


    public function mount($latest_slide_order)
    {
        $this->latest_slide_order = $latest_slide_order;

        if ($this->latest_slide_order >= $this->slide_id) {
            $this->allow_next = true;
        }

        if ($this->latest_slide_order > $this->slide_id) {
            $this->show_next = false;
        }

        if ($this->latest_slide_order == $this->slide_id) {
            $this->current_slide = true;
        }
    }

    public function openModal($modal_id)
    {
        // emit openModal
        $this->emit('openModal', 'course.text-modal', ['title' => $this->modals[$modal_id]['title'], 'body' => $this->modals[$modal_id]['body']]);

        $this->opened[$modal_id] = true;

        if ($this->opened[1] && $this->opened[2] && $this->opened[3] && $this->opened[4]) {
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
        return view('livewire.lesson.slides.m1l2s2');
    }
}
