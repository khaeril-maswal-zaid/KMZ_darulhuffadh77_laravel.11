<?php

namespace Database\Seeders;

use App\Models\Tholabah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class TholabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tholabah::factory(100)->create();

        // DB::table('tholabahs')->insert([
        //     'nama' => 'okk',
        //     'jenis_kelamin' => 'okk',
        //     'nisdh' => 'okk',
        //     'tempat_lahir' => 'okk',
        //     'tanggal_lahir' => 'okk',
        //     'provinsi' => 'okk',
        //     'kabupaten' => 'okk',
        //     'kecamatan' => 'okk',
        //     'desa' => 'okk',

        //     'nama_ayah' => 'okk',
        //     'nama_ibu' => 'okk',
        //     'pekerjaan_ayah' => 'okk',
        //     'pekerjaan_ibu' => 'okk',

        //     'asal_sekolah' => 'okk',
        //     'nisn' => 'okk',
        //     'angkatan' => 2023,

        //     'picture' => 'okk',
        // ]);
    }
}
