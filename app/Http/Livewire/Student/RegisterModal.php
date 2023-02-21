<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use App\Mail\SendOtp;
use App\Models\Cstate;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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
    public $genders = [];
    public $qualifications = [];

    public $name = '';
    public $email = '';
    public $dob = '';
    public $cstate_id = '';
    public $gender = '';
    public $qualification_type = '';
    public $qualification_name = '';
    public $otp = '';
    public $user_otp;

    public $step = 1;

    public $error = false;
    public $message = '';

    public $user;

    public function mount()
    {
        $this->cstates = Cstate::all();

        $this->genders = [
            'Male',
            'Female',
            'Other',
            'Prefer not to say'
        ];

        $this->qualifications = [
            'High School',
            'Under Graduate',
            'Graduate',
            'Post Graduate',
            'Other'
        ];
    }

    public function generateOtp()
    {
        return rand(100000, 999999);
    }


    public function rules()
    {
        return [
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255|unique:users',
            'dob' => 'required|date',
            'cstate_id' => 'required|integer|exists:cstates,id',
            'gender' => 'required|integer|in:0,1,2,3',
            'qualification_type' => 'required|integer|in:0,1,2,3,4',
            'qualification_name' => 'required|string|max:255',
        ];
    }

    public function syncLessons()
    {
        $all_lessons = Lesson::all();
        $user_lessons = $this->user->lessons;
        $diff_lessons = $all_lessons->diff($user_lessons);
        $this->user->lessons()->attach($diff_lessons);
    }

    public function sendOtp()
    {
        // Check if user exists and email is verified
        $user = User::where('email', $this->email)->where('email_verified_at', '!=', null)->first();

        if ($user) {
            // User exists and email is verified
            $this->error = 'User already exists.';
        } else {
            // Generate OTP
            $this->otp = $this->generateOtp();

            // User does not exist or email is not verified
            $this->createUser();

            // Send mail OTP
            Mail::to($this->user)->send(new SendOtp($this->otp));

            // Add message
            $this->message = 'OTP sent to your email.';

            // Increment step
            $this->step++;
        }
    }

    public function createUser()
    {
        $this->validate();

        $gender = $this->genders[$this->gender];
        $qualification_type = $this->qualifications[$this->qualification_type];

        $this->user = User::updateOrCreate(
            ['email' => $this->email],

            [
                'name' => $this->name,
                'dob' => $this->dob,
                'cstate_id' => $this->cstate_id,
                'password' => Hash::make($this->otp),
                'role_id' => 2,
                'gender' => $gender,
                'qualification_type' => $qualification_type,
                'qualification_name' => $this->qualification_name,
                'otp' => Hash::make($this->otp),
                'otp_valid_till' => now()->addMinutes(30),
            ]
        );
    }

    public function validateOtp()
    {
        $user = $this->user;

        // Check if OTP is still valid
        if (now() > $user->otp_valid_till) {
            $this->error = 'OTP has expired.';
        } else {
            // Check if OTP is correct
            if (Auth::attempt(['email' => $this->email, 'password' => $this->user_otp])) {

                // Update email_verified_at
                $user->email_verified_at = now();
                $user->save();

                // Add message
                $this->message = 'Email verified.';


                // Sync lessons
                $this->syncLessons();

                // Redirect to the dashboard
                return redirect()->route('course');
            } else {
                // OTP is incorrect
                $this->error = 'OTP is incorrect.' . $this->user_otp . ' - ' . $this->otp;
            }
        }
    }

    public function submit()
    {
        $this->error = false;
        $this->message = '';

        if ($this->step == 1) {
            $this->sendOtp();
        } else if ($this->step == 2) {
            $this->validateOtp();
        }
    }

    public function render()
    {
        return view('livewire.student.register-modal');
    }
}
