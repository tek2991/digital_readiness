<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Lesson extends Model
{
    public $timestamps = false;

    public static function defaultLessons(){
        return [
            1 => [
                'What is Artificial Intelligence?',
                'Can a machine also do these things?',
                'Artificial Intelligence, Machine Learning, and Deep Learning',
                'Influence of AI on the present',
                'AI in Todays World',
                'What are AI capabilities?',
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
    ];

    public function module()
    {
        return $this->belongsTo(Module::class);
    }
}
