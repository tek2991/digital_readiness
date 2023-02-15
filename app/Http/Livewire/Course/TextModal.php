<?php

namespace App\Http\Livewire\Course;

use LivewireUI\Modal\ModalComponent;

class TextModal extends ModalComponent
{
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return 'xl';
    }

    public function nobg()
    {
        return true;
    }

    public $title = '';
    public $body = '';

    public function mount( $title, $body )
    {
        $this->title = $title;
        $this->body = $body;
    }


    public function render()
    {
        return view('livewire.course.text-modal');
    }
}
