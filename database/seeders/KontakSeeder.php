<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class KontakSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'medsos' => 'Tujuh-Tujuh, Kec. Kajuara',
                'akun' => 'Kab. Bone, Sulawesi Selatan',
                'nama' =>  null,
                'link' => null,
                'icon' => 'fa fa-map-marker-alt'
            ],
            [
                'medsos' => 'Alamat Email',
                'akun' => 'info@darulhufadh77.ponpes.id',
                'nama' =>  null,
                'link' => null,
                'icon' => 'fa fa-envelope-open'
            ],
            [
                'medsos' => 'Facebook',
                'akun' => 'Acq Darul Huffadh',
                'nama' =>  null,
                'link' => 'https://facebook.com/acq-darul-hufadh',
                'icon' => 'fa fa-facebook-fb'
            ],
            [
                'medsos' => 'Instagram',
                'akun' => 'Darul Huffadh 77',
                'nama' =>  null,
                'link' => 'https://instagram.com/acq-darul-hufadh',
                'icon' => 'fa fa-instagram-ig'
            ],
            [
                'medsos' => 'Kontak Pimpinan',
                'akun' => '+012 345 6789',
                'nama' =>  'Ust. Saad Said',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
            [
                'medsos' => 'Kontak Direktur Putra',
                'akun' => '+012 345 6789',
                'nama' =>  'Ust. Mustari Gaffar',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
            [
                'medsos' => 'Kontak Direktur Putri',
                'akun' => '+012 345 6789',
                'nama' =>  'Usth. Saddiyah Said',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
        ];

        foreach ($datas as $data) {
            DB::table('kontaks')->insert($data);
        }

        //Run : php artisan db:seed --class=KontakSeeder
    }
}
