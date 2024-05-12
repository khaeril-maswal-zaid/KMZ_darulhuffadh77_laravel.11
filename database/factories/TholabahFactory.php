<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Tholabah>
 */
class TholabahFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'tempat_lahir' => fake()->word(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),

            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),

            'asal_sekolah' => fake()->word(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'angkatan' => fake()->year(),

            'kelas' => fake()->randomElement(['VII MTs', 'VIII MTs', 'IX MTs', 'X MA', 'XI MA', 'XII MA', 'Pengabdian', 'Pembesar Pondok']),
            'active' => fake()->boolean(),

            'kategori' => fake()->randomElement(['Tholabun', 'Pengab. luar', 'Pembina', 'Alumni']),
            'depertement' => fake()->randomElement(['KMI', 'Mathbah', 'Riayah', 'Bahasa', 'Tahfidzh']),

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_tamat' => fake()->year(),

            'picture' => fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ];
    }
}
