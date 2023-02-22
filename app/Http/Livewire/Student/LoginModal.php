<?php

namespace App\Http\Livewire\Student;

use App\Models\User;
use App\Mail\SendOtp;
use App\Models\Lesson;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
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

    public $otp;
    public $user_otp;
    public $step = 1;


    public $email = '';

    public $error = false;
    public $message = '';

    public $user;

    public function mount()
    {
    }

    public function rules()
    {
        return [
            'email' => 'required|email|max:255|exists:users,email',
        ];
    }

    public function generateOtp()
    {
        return rand(100000, 999999);
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
        $this->validate();

        $this->user = User::where('email', $this->email)->first();

        // Generate OTP
        $this->otp = $this->generateOtp();

        // Update user OTP
        $this->user->update([
            'otp' => Hash::make($this->otp),
            'otp_valid_till' => now()->addMinutes(10),
        ]);

        // Send mail OTP
        Mail::to($this->user)->send(new SendOtp($this->otp));

        // Add message
        $this->message = 'OTP sent to your email.';

        // Increment step
        $this->step = 2;
    }

    public function validateOtp()
    {
        $this->validate([
            'user_otp' => 'required|numeric|digits:6',
        ]);

        $user = $this->user;

        if (now() > $user->otp_valid_till) {
            $this->error = 'OTP has expired.';
        } else {
            // Check if OTP is correct
            if (Hash::check($this->user_otp, $this->user->otp)) {

                // Login user
                Auth::login($this->user);

                // Update email_verified_at if not verified
                if (!$user->email_verified_at) {
                    $user->email_verified_at = now();
                    $user->save();
                }

                // Add message
                $this->message = 'Email verified.';


                // Sync lessons
                $this->syncLessons();

                // Delete OTP
                $user->update([
                    'otp' => null,
                    'otp_valid_till' => null,
                ]);

                // Redirect to the dashboard
                return redirect()->route('course');
            } else {
                // OTP is incorrect
                $this->error = 'OTP is incorrect.';
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

    public function resendOtp()
    {
        $this->error = false;
        $this->message = '';
        
        $this->user = User::where('email', $this->email)->first();

        // Generate OTP
        $this->otp = $this->generateOtp();

        // Update user OTP
        $this->user->update([
            'otp' => Hash::make($this->otp),
            'otp_valid_till' => now()->addMinutes(10),
        ]);

        // Send mail OTP
        Mail::to($this->user)->send(new SendOtp($this->otp));

        // Add message
        $this->message = 'OTP resend to your email.';
    }

    public function render()
    {
        return view('livewire.student.login-modal');
    }
}
