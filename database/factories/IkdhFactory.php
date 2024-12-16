<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Ikdh>
 */
class IkdhFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'cabang' => fake()->unique()->city(),
            'tholabah_id' => fake()->unique()->numberBetween(8, 38)
        ];
    }
}
