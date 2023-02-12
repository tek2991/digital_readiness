<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use App\Models\Cstate;
use Illuminate\Support\Facades\Hash;
use LivewireUI\Modal\ModalComponent;

class RegisterModal extends ModalComponent
{
    /**
     * Supported: 'sm', 'md', 'lg', 'xl', '2xl', '3xl', '4xl', '5xl', '6xl', '7xl'
     */
    public static function modalMaxWidth(): string
    {
        return '4xl';
    }

    public $cstates = [];

    public $name = '';
    public $email = '';
    public $dob = '';
    public $cstate_id = '';
    public $password = '';
    public $password_confirmation = '';

    public function mount()
    {
        $this->cstates = Cstate::all();
    }

    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dob' => 'required|date',
            'cstate_id' => 'required|integer|exists:cstates,id',
            'password' => 'required|string|min:8|confirmed',
        ];
    }

    public function updated($propertyName)
    {
        $this->validateOnly($propertyName);
    }

    public function register()
    {
        $this->validate();

        User::create([
            'name' => $this->name,
            'email' => $this->email,
            'dob' => $this->dob,
            'cstate_id' => $this->cstate_id,
            'password' => Hash::make($this->password),
            'role_id' => 2,
        ]);

        $this->emit('userRegistered');

        $this->closeModal();
    }

    public function render()
    {
        return view('livewire.student.register-modal');
    }
}
