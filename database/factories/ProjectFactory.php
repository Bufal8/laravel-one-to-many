<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Project>
 */
class ProjectFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition()
    {
        return [
            'name' => "Project: " . fake() -> words(1, true),
            'description' => "Amazing " . fake() -> randomElement(['html ', 'JS ', 'Vue ', 'php ', 'laravel ']) . "project " . fake() -> paragraph(),
            'start_date' => fake() -> dateTimeBetween('-3 week', '-1 week'),
            'end_date' => fake() -> dateTimeBetween('-1 week', 'now'),
            'difficulty' => fake() -> randomElement(['easy', 'medium', 'hard'])
        ];
    }
}
