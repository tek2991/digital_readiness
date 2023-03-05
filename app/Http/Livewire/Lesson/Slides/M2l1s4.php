<?php

namespace App\Http\Livewire\Lesson\Slides;

use Livewire\Component;

class M2l1s4 extends Component
{
    public $latest_slide_order;
    public $allow_next = false;
    public $show_next = true;
    public $complete = false;
    public $current_slide = false;

    public $slide_id = 4;

    public $part_no = 1;

    public $classes = 'hidden';

    public $input1;
    public $input2;
    public $input3;
    public $input4;

    public $weight1;
    public $weight2;
    public $weight3;
    public $weight4;

    public $wsum;

    public $bias;

    public $output;


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

    protected $listeners = [];

    public function calcWSum(){
        // check if all inputs are set
        if($this->input1 == null || $this->input2 == null || $this->input3 == null || $this->input4 == null){
            $this->wsum = null;
        }
        // check if all weights are set
        if($this->weight1 == null || $this->weight2 == null || $this->weight3 == null || $this->weight4 == null){
            $this->wsum = null;
        }
        $this->wsum = $this->input1 * $this->weight1 + $this->input2 * $this->weight2 + $this->input3 * $this->weight3 + $this->input4 * $this->weight4;
    }

    public function calcOutput()
    {
        if ($this->wsum == null || $this->bias == null) {
            $this->output = null;
            return;
        }
        $this->output = $this->wsum - $this->bias;
    }

    public function changeInput($id){
        if($this->part_no != 5){
            return;
        }
        if($id == 1){
            if($this->input1 == 1){
                $this->input1 = 0;
            } else {
                $this->input1 = 1;
            }
        }

        if($id == 2){
            if($this->input2 == 1){
                $this->input2 = 0;
            } else {
                $this->input2 = 1;
            }
        }

        if($id == 3){
            if($this->input3 == 1){
                $this->input3 = 0;
            } else {
                $this->input3 = 1;
            }
        }

        if($id == 4){
            if($this->input4 == 1){
                $this->input4 = 0;
            } else {
                $this->input4 = 1;
            }
        }

        $this->calcWSum();
        $this->calcOutput();
    }

    public function checkPart()
    {
        if ($this->part_no == 1) {
            $this->input1 = null;
            $this->input2 = null;
            $this->input3 = null;
            $this->input4 = null;

            $this->weight1 = null;
            $this->weight2 = null;
            $this->weight3 = null;
            $this->weight4 = null;

            $this->wsum = null;

            $this->bias = null;
        }

        if ($this->part_no == 2) {
            $this->input1 = 1;
            $this->input2 = 0;
            $this->input3 = 1;
            $this->input4 = 0;

            $this->weight1 = null;
            $this->weight2 = null;
            $this->weight3 = null;
            $this->weight4 = null;

            $this->wsum = null;

            $this->bias = null;
        }

        if ($this->part_no == 3) {
            $this->input1 = 1;
            $this->input2 = 0;
            $this->input3 = 1;
            $this->input4 = 0;

            $this->weight1 = 1.5;
            $this->weight2 = 1.0;
            $this->weight3 = 3.0;
            $this->weight4 = 2.5;

            $this->wsum = null;

            $this->bias = null;
        }

        if ($this->part_no == 4) {
            $this->input1 = 1;
            $this->input2 = 0;
            $this->input3 = 1;
            $this->input4 = 0;

            $this->weight1 = 1.5;
            $this->weight2 = 1.0;
            $this->weight3 = 3.0;
            $this->weight4 = 2.5;

            $this->wsum = null;

            $this->bias = 4.0;
        }
        
        $this->calcWSum();
        $this->calcOutput();
    }

    public function updated($propertyName)
    {
        if ($this->part_no == 5) {
            // If update in weight or bias, recalculate wsum and output
            if ($propertyName == 'weight1' || $propertyName == 'weight2' || $propertyName == 'weight3' || $propertyName == 'weight4' || $propertyName == 'bias') {
                if($this->weight1 == null){
                    $this->weight1 = 0;
                }
                if($this->weight2 == null){
                    $this->weight2 = 0;
                }
                if($this->weight3 == null){
                    $this->weight3 = 0;
                }
                if($this->weight4 == null){
                    $this->weight4 = 0;
                }
                if($this->bias == null){
                    $this->bias = 0;
                }
                $this->calcWSum();
                $this->calcOutput();
            }
        }
    }

    public function completeSlide()
    {
        $this->complete = true;
    }

    public function prevStep()
    {
        if ($this->part_no > 1) {
            $this->part_no--;
            $this->checkPart();
        }
    }

    public function nextSlide()
    {
        if ($this->part_no < 5) {
            $this->part_no++;
            $this->checkPart();
            if ($this->part_no == 5) {
                $this->completeSlide();
            }
            return;
        }


        $this->nextLesson();
    }

    public function nextLesson()
    {
        $this->emitTo('lesson.m2l1', 'nextLesson');
    }

    public function render()
    {
        return view('livewire.lesson.slides.m2l1s4');
    }
}
