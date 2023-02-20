<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = false;

    public static function defaultLessons(){
        return [
            1 => [
                1 => 'What is Artificial Intelligence?', #1
                2 => 'AI in Todays World', #2
                3 => 'Quiz', #3
                4 => 'Case Study', #4
            ],
            2=> [
                1 => 'What Happens Inside AI?', #5
                2 => 'Teachable Machine', #6
                3 => 'Impact of AI', #7
            ],
            3=> [

            ],
        ];
    }

    /**
     * The attributes that are mass assignable.
     *
     * @var array<int, string>
     */
    protected $fillable = [
        'name',
        'module_id',
        'order'
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }

    public function slides()
    {
        return $this->hasMany(Slide::class);
    }

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
