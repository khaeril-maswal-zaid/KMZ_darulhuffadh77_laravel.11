<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Kulikuler_personil>
 */
class Kulikuler_personilFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'kulikuler_id' => fake()->numberBetween(1, 5),
            'santri_id' => fake()->unique()->numberBetween(1, 300),
            'devisi' => fake()->word,
            'description' => 'Dolor et eos labore, stet justo sed est sed. Diam sed sed dolor
            stet amet eirmod eos labore diam',
        ];
    }
}
