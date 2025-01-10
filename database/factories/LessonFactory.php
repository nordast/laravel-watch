<?php

namespace Database\Factories;

use App\Models\Course;
use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Carbon;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Lesson>
 */
class LessonFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'course_id' => Course::inRandomOrder()->first(),
            'number'    => 1,
            'title'     => ucfirst(fake()->words(rand(2, 6), true)),
            'length'    => fake()->numberBetween(Carbon::SECONDS_PER_MINUTE, Carbon::SECONDS_PER_MINUTE * 20),
        ];
    }
}
