<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Sanctum\HasApiTokens;

class User extends Authenticatable
{
    use HasApiTokens, HasFactory, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'dob',
        'cstate_id',
        'role_id',
        'gender',
        'qualification_type',
        'qualification_name',
        'otp',
        'otp_valid_till',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array<int, string>
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array<string, string>
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
        'dob' => 'date',
    ];

    public function role()
    {
        return $this->belongsTo(Role::class);
    }

    public function cstate()
    {
        return $this->belongsTo(Cstate::class);
    }

    public function isStudent()
    {
        return $this->role->name === 'student';
    }

    public function isAdmin()
    {
        return $this->role->name === 'admin';
    }

    public function lessons()
    {
        return $this->belongsToMany(Lesson::class)->withPivot('completed', 'latest_slide_order');
    }
}
