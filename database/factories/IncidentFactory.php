<?php

namespace Database\Factories;

use App\Models\Venture;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Incident>
 */
class IncidentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'venture_id' => Venture::factory(),
            'title' => 'Incident with ' . $this->faker->words,
            'status' => 'investigating',
            'created_by' => User::factory(),
        ];
    }
}
