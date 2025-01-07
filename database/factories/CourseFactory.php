<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Course>
 */
class CourseFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'title'         => $this->faker->sentence(rand(2, 6)),
            'description'   => $this->faker->paragraph(rand(2, 6)),
            'lessons_count' => $this->faker->numberBetween(10, 50),
            'length'        => $this->faker->numberBetween(1, 15)."h ".$this->faker->numberBetween(0, 59)."min"
        ];
    }
}
