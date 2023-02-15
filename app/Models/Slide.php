<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Slide extends Model
{
    public $timestamps = false;

    public static function defaultSlides(){
        return [
            // Module 1
            1=>[
                // Lesson 1
                1 => [
                    // Slides
                    1 => "Introduction",
                    2 => "Overview",
                    3 => "What is Artificial Inteligence",
                    4 => "Artificial Intelligence, Machine Learning & Deep Learning",
                ],

                // Lesson 2
                2 => [
                    // Slides
                    1 => "Influence of AI on the present",
                    2 => "What are AI's capabilities?",
                ],
            ],
        ];
    }

    protected $fillable = [
        "name",
        "lesson_id",
        "order"
    ];

    public function lesson()
    {
        return $this->belongsTo(Lesson::class);
    }
}
