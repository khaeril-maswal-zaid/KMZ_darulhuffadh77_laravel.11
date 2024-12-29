<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoreSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                "categori" => "carousel",
                "name" => "Carousel",
                "value" => "carousel1.jpg"
            ],
            [
                "categori" => "carousel",
                "name" => "Carousel",
                "value" => "carousel2.jpg"
            ],
            [
                "categori" => "quotes",
                "name" => "Quotes",
                "value" => "Perlu dibela, dijaga dan diperjuangkan"
            ],
            [
                "categori" => "quotes",
                "name" => "Quotes",
                "value" => "Menuju Pulau Idaman Al-Quran & Al-Hadist"
            ],
            [
                "categori" => "rekenening",
                "name" => "Rekenening",
                "value" => "123456789"
            ],
            [
                "categori" => "logo-dh",
                "name" => "Logo DH",
                "value" => "dh77.png"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Kemenag",
                "value" => "kemenag.png"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "osdah.png"
            ],
        ];

        foreach ($datas as $data) {
            DB::table('mores')->insert($data);
        }
    }
}
