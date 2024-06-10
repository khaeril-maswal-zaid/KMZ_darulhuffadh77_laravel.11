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
    public function definition()
    {
        return [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => 'Done', //ini


            'kelas' => fake()->randomElement(['VII MTs', 'VIII MTs', 'IX MTs', 'X MA', 'XI MA', 'XII MA']), //ini salah satu
            'active' => fake()->boolean(),

            'kategori' => 'Tholabun', //ini

            'depertement' => 'Tholabun', //ini

            'kontak' => fake()->phoneNumber(),
            'marhalah' => 'Tholabun', //ini
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ];
    }

    public function santriBaru()
    {
        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => fake()->randomElement(['Daftar', 'Verified']), //ini


            'kelas' => 'Calon Santri Baru', //ini
            'active' => false, //ini

            'kategori' => 'csb-165', //ini

            'depertement' => 'csb-165', //ini

            'kontak' => fake()->phoneNumber(),
            'marhalah' => 'csb-165', //ini
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }

    public function pembina()
    {
        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => 'Done',


            'kelas' => 'Pengabdian',
            'active' => true,

            'kategori' => 'Pembina',

            'depertement' => fake()->randomElement(['KMI', 'Mathbah', 'Riayah', 'Bahasa', 'Tahfidzh']),

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }

    public function pengabdianLuar()
    {

        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => 'Done',


            'kelas' => 'Pengabdian',
            'active' => false,

            'kategori' => 'Pengabdian luar',

            'depertement' => 'Pengabdian luar',

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }

    public function alumni()
    {
        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => 'Done',


            'kelas' => 'Alumni',
            'active' => false,

            'kategori' => 'Alumni',

            'depertement' => 'Alumni',

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }

    public function pembesar()
    {
        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => 'Done',


            'kelas' => 'Pembesar Pondok',
            'active' => true,

            'kategori' => 'Pembina',

            'depertement' => 'Pembesar Pondok',

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }

    public function rundom()
    {
        return  $this->state(fn (array $attributes) =>  [
            'nik' => fake()->unique()->numberBetween(1111111111111111, 9999999999999999),
            'nama' => fake()->name(),
            'jenis_kelamin' => fake()->randomElement(['Laki-laki', 'Perempuan']),
            'tempat_lahir' => fake()->citySuffix(),
            'tanggal_lahir' => fake()->date('d-m-Y'),
            'provinsi' => fake()->city(),
            'kabupaten' => fake()->citySuffix(),
            'kecamatan' => fake()->city(),
            'desa' => fake()->citySuffix(),
            'nama_ayah' => fake()->name(),
            'nama_ibu' => fake()->name(),
            'pekerjaan_ayah' => fake()->jobTitle(),
            'pekerjaan_ibu' => fake()->jobTitle(),
            'kontak_ayah' => fake()->phoneNumber(),
            'kontak_ibu' => fake()->phoneNumber(),
            'nisn' => fake()->unique()->numberBetween(111111111, 999999999),
            'asal_sekolah' => fake()->word(),
            'tahun_tamat_sd' => fake()->year(),

            'experiment' => fake()->boolean(),
            'nisdh' => fake()->unique()->numberBetween(1111111, 9999999),
            'angkatan' => fake()->year(),


            'kategori_santri_baru' => fake()->randomElement(['Daftar', 'Pengembalian', 'Tholabun']),


            'kelas' => fake()->randomElement(['VII MTs', 'VIII MTs', 'IX MTs', 'X MA', 'XI MA', 'XII MA', 'Pengabdian', 'Pembesar Pondok']),
            'active' => fake()->boolean(),

            'kategori' => fake()->randomElement(['Tholabun', 'Pengabdian luar', 'Pembina', 'Alumni']),

            'depertement' => fake()->randomElement(['KMI', 'Mathbah', 'Riayah', 'Bahasa', 'Tahfidzh']),

            'kontak' => fake()->phoneNumber(),
            'marhalah' => fake()->word(),
            'tahun_alumni' => fake()->year(),

            'picture' => 'tholabahs/' . fake()->randomElement(['team-1.jpg', 'team-2.jpg', 'team-3.jpg']),
        ]);
    }
}
