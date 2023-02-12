<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use App\Models\Cstate;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class LoginModal extends ModalComponent
{
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public $cstates = [];


    public $email = '';
    public $password = '';

    public function mount()
    {

    }

    public function rules()
    {
        return [
            'email' => 'required|email|max:255',
            'password' => 'required|string|min:8',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function login()
    {
        $this->validate();

        if (auth()->attempt(['email' => $this->email, 'password' => $this->password])) {
            $this->emit('loginSuccess');
            $this->closeModal();
        } else {
            $this->addError('email', 'Invalid email or password');
        }
    }

    public function render()
    {
        return view('livewire.student.login-modal');
    }
}
