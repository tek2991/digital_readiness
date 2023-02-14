<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class SlideSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $defaultSlides = \App\Models\Slide::defaultSlides();
        foreach ($defaultSlides as $moduleId => $lessons) {
            foreach ($lessons as $lessonId => $slides) {
                foreach ($slides as $order => $name) {
                    \App\Models\Slide::updateOrCreate([
                        'name' => $name,
                        'lesson_id' => $lessonId,
                        'order' => $order,
                    ]);
                }
            }
        }

        $this->command->info('Slides seeded!');
    }
}
