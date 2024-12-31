<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\User>
 */
class UserFactory extends Factory
{
    /**
     * The current password being used by the factory.
     */
    protected static ?string $password;

    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'email' => fake()->unique()->safeEmail(),
            'email_verified_at' => now(),
            'password' => static::$password ??= Hash::make('password'),
            'image' => 'user/kmz.jpg',
            'remember_token' => Str::random(10),
        ];
    }

    public function kmz()
    {
        return $this->state(fn(array $attributes) =>  [
            'name' => 'Official DH 77',
            'jenis_kelamin' => 'Laki-laki',
            'email' => 'official@darul-huffadh.ponpes.id',
            'email_verified_at' => now(),
            'password' => Hash::make('maahadii165#'),
            'image' => 'users/user.jpg',
            'remember_token' => Str::random(10),
        ]);
    }

    /**
     * Indicate that the model's email address should be unverified.
     */
    public function unverified(): static
    {
        return $this->state(fn(array $attributes) => [
            'email_verified_at' => null,
        ]);
    }
}
