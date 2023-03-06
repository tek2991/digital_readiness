<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M3l3s7 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 7;

    public $opened = [ 
        1 => false,
        2 => false,
        3 => false,
        4 => false,
        5 => false,
        6 => false,
    ];

    public $modals = [
        1 => [
            'title' => 'Problem Scoping',
            'body' => 'In Stage 1, we have Problem Scoping.
            Scope means the extent of the area or subject matter that something deals with or to which it is relevant. The main objective of this stage is to define a goal for this project. It is one of the most important stages to kickstart the AI process. You need to define what is the problem that needs to be solved.  If you want a good outcome, you must set the goal right. It is like finding the goal post and positioning yourself to kick the ball into the goal post.'
        ],

        2 => [
            'title' => 'Data Acquisition',
            'body' => 'In Stage 2, we have Data Acquisition. Think of the key word “acquisition”. It means the process of getting something. In this case, what are we getting?  
            Data Acquisition is a stage in which you collect data you think you will need to train your model.'
        ],

        3 => [
            'title' => 'Data Exploration',
            'body' => 'In Stage 3, we have Data Exploration. Think of the key word “exploration”. It means the process of investigation and exploring new things in data. In this case, what are we explore new insights from data and convert it into a cleaner form.  
            The main objective of this stage is to visualize data usually through graphs, or in a form that is human readable. '
        ],

        4 => [
            'title' => 'Modeling',
            'body' => 'In Stage 4, we have Modeling. In AI/ML, a model replicates a decision process to enable automation and understanding. 
            AI/ML models are mathematical algorithms. It is trained by using data and human expert input to replicate decisions that an expert would make. 
            
            The main objective of modeling is to implement algorithms and fine-tune the model which gives the best results. '
        ],

        5 => [
            'title' => 'Evaluation',
            'body' => 'In Stage 5, we have Evaluation. Think of the keyword “evaluate”. It means the process of testing. 
            Evaluation is to judge or calculate the quality, importance, or value of something.
            
            The main objective of this stage is to evaluate on the different models and choose the best model. '
        ],

        6 => [
            'title' => 'Deployment',
            'body' => 'In Stage 6, we have Deployment. Think of the keyword “deploy”.
            Deploy means positioning or placing at some place, therefore using something in a useful way.
            
            The main objective of this stage is to deploy your solution based on the model on selected platforms. '
        ],
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

        // $this->completeSlide();
    }

    public function openModal($modal_id)
    {
        // emit openModal
        $this->emit('openModal', 'course.text-modal', ['title' => $this->modals[$modal_id]['title'], 'body' => $this->modals[$modal_id]['body']]);

        $this->opened[$modal_id] = true;

        if ($this->opened[1] && $this->opened[2] && $this->opened[3] && $this->opened[4] && $this->opened[5] && $this->opened[6]) {
            $this->completeSlide();
        }
    }

    protected $listeners = [];

    public function completeSlide()
    {
        $this->complete = true;
    }


    public function nextSlide()
    {
        $this->latest_slide_order = $this->slide_id + 1;
        $this->show_next = false;
        $this->current_slide = false;
        $this->emitTo('lesson.m3l3', 'nextSlide', $this->slide_id + 1);
    }

    public function render()
    {
        return view('livewire.lesson.slides.m3l3s7');
    }
}
