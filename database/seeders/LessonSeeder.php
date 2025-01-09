<?php

namespace Database\Seeders;

use App\Models\Course;
use App\Models\Lesson;
use Illuminate\Database\Seeder;

class LessonSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Lesson::truncate();

//        Lesson::factory(50)->create();

        Course::each(fn(Course $course) => collect()
            ->range(1, mt_rand(5, 20))
            ->each(fn(int $number) => Lesson::factory()
                ->for($course)
                ->create(['number' => $number])
            )
        );
    }
}
