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
                    1 => "Start",
                    2 => "Question 1",
                    3 => "Question 2",
                    4 => "Question 3",
                    5 => "Question 4",
                    6 => "Question 5",
                    7 => "Question 6",
                    8 => "Question 7",
                    9 => "Question 8",
                ],

                // Lesson 4
                4 => [
                    // Slides
                    1 => "Video",
                    2 => "Road Safety Facts",
                    3 => "Road Safety Facts 2",
                ],
            ],

            // Module 2
            2=>[
                // Lesson 5
                5 => [
                    // Slides
                    1 => "How AI Works",
                    2 => "How does AI make a decision?",
                    3 => "What is a Perceptron?",
                    4 => "Perceptron for going to the park example",
                    5 => "Teachable Machine",
                ],

                // Lesson 6
                6 => [
                    1 => "Teachable Machine",
                    2 => "Teachable Machine2",
                    3 => "Introduction to Teachable Machine",
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
