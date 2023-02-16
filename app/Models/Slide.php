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
                    3 => "AI can understand language",
                    4 => "AI is everywhere",
                    5 => "AI is everywhere 2",
                    6 => "AI is everywhere 3",
                    7 => "AI is everywhere 4",
                    8 => "AI is everywhere 5",
                    9 => "Automation",
                    10 => "Automation vs Artificial Intelligence",
                ],

                // Lesson 3
                3 => [
                    // Slides
                    1 => "Question 1",
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
