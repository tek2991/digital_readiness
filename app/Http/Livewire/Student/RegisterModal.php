<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use App\Models\Cstate;
use App\Models\Lesson;
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

    public function register()
    {
        $this->validate();

        $user = User::create([
            'name' => $this->name,
            'email' => $this->email,
            'dob' => $this->dob,
            'cstate_id' => $this->cstate_id,
            'password' => Hash::make($this->password),
            'role_id' => 2,
            'email_verified_at' => now(), // TODO: Remove this line
        ]);

        // Authenticate the user
        auth()->attempt([
            'email' => $this->email,
            'password' => $this->password,
        ]);

        $all_lessons = Lesson::all();
        $user_lessons = $user->lessons;
        $diff_lessons = $all_lessons->diff($user_lessons);
        $user->lessons()->attach($diff_lessons);

        // Send email verification
        // auth()->user()->sendEmailVerificationNotification(); // TODO: Uncomment this line

        // Redirect to the dashboard
        return redirect()->route('course');
    }

    public function render()
    {
        return view('livewire.student.register-modal');
    }
}
