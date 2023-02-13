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
                2 => 'Can a machine also do these things?',
                3 => 'Artificial Intelligence, Machine Learning, and Deep Learning',
                4 => 'Influence of AI on the present',
                5 => 'AI in Todays World',
                6 => 'What are AI capabilities?',
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

    public function users()
    {
        return $this->belongsToMany(User::class);
    }
}
