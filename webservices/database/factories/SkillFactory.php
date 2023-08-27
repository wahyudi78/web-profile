<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Skill>
 */
class SkillFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'users' => 1,
            'skill' => $this->faker->text(),
            'image' => $this->faker->imageUrl(640,480),
            'category' => 1,
            'status' => 1,
        ];
    }
}
