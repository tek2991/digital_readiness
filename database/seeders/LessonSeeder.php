<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Lesson;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $lessons = Lesson::defaultLessons();

        foreach ($lessons as $module_id => $lessons) {
            foreach ($lessons as $lesson) {
                Lesson::updateOrCreate([
                    'name' => $lesson,
                    'module_id' => $module_id,
                ]);
            }
        }

        $this->command->info('Lessons seeded!');
    }
}
