<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class AktivitasSantriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [[
            'kategori' => 'harian',
            'hari' => 'Jumat',
            'waktu' => '05:30 - 06:00',
            'agenda' => 'Bahasa',
            'picture' => 'default.jpg',
        ]];

        foreach ($datas as $data) {
            DB::table('aktivitas_santris')->insert($data);
        }

        //Run : php artisan db:seed --class=AktivitasSantriSeeder
    }
}
