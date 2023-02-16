<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = false;

    public static function defaultLessons(){
        return [
            1 => [
                1 => 'What is Artificial Intelligence?',
                2 => 'AI in Todays World',
                3 => 'Quiz',
            ],
            2=> [

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
