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
                "value" => "more/carousel-1.jpg"
            ],
            [
                "categori" => "carousel",
                "name" => "Carousel",
                "value" => "more/carousel-2.jpg"
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
                "categori" => "rekening",
                "name" => "Rekenening",
                "value" => "123456789"
            ],
            [
                "categori" => "logo-dh",
                "name" => "Logo DH",
                "value" => "more/dh77.png"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Kemenag",
                "value" => "more/kemenag.png"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-1.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-2.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-3.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-4.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-5.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-6.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-7.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-8.jpg"
            ],
            [
                "categori" => "logo-vendor",
                "name" => "Osdah",
                "value" => "more/vendor-9.jpg"
            ],
            [
                "categori" => "alumnibefore",
                "name" => "Alumni",
                "value" => "739"
            ],
            [
                "categori" => "santribefore",
                "name" => "Santri",
                "value" => "739"
            ],
            [
                "categori" => "santriwatibefore",
                "name" => "Santriwati",
                "value" => "739"
            ],
            [
                "categori" => "footer-teks",
                "name" => "",
                "value" => ""
            ],
        ];

        foreach ($datas as $data) {
            DB::table('mores')->insert($data);
        }
    }
}
