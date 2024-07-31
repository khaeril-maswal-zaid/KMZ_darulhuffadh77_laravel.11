<?php

namespace Database\Seeders;

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
                'slug' => 'alamat',
                'medsos' => 'Tujuh-Tujuh, Kec. Kajuara',
                'akun' => 'Kab. Bone, Sulawesi Selatan',
                'nama' =>  '-',
                'link' => '-',
                'icon' => 'fa fa-map-marker-alt'
            ],
            [
                'slug' => 'alamat-email',
                'medsos' => 'Alamat Email',
                'akun' => 'info@darulhufadh77.ponpes.id',
                'nama' =>  '-',
                'link' => '-',
                'icon' => 'fa fa-envelope-open'
            ],
            [
                'slug' => 'facebook',
                'medsos' => 'Facebook',
                'akun' => 'Acq Darul Huffadh',
                'nama' =>  '-',
                'link' => 'https://facebook.com/acq-darul-hufadh',
                'icon' => 'fab fa-facebook-f'
            ],
            [
                'slug' => 'instagram',
                'medsos' => 'Instagram',
                'akun' => 'Darul Huffadh 77',
                'nama' =>  '-',
                'link' => 'https://instagram.com/acq-darul-hufadh',
                'icon' => 'fab fa-instagram'
            ],
            [
                'slug' => 'kontak-pimpinan',
                'medsos' => 'Kontak Pimpinan',
                'akun' => '+012 345 6789',
                'nama' =>  'Ust. Saad Said',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
            [
                'slug' => 'kontak-direktur-putra',
                'medsos' => 'Kontak Direktur Putra',
                'akun' => '+012 345 6789',
                'nama' =>  'Ust. Mustari Gaffar',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
            [
                'slug' => 'kontak-direktur-putri',
                'medsos' => 'Kontak Direktur Putri',
                'akun' => '+012 345 6789',
                'nama' =>  'Usth. Saddiyah Said',
                'link' => 'https://web.whatsapp.com/',
                'icon' => 'fa fa-phone-alt'
            ],
            [
                'slug' => 'maps',
                'medsos' => 'Maps',
                'akun' => 'Darul Huffadh',
                'nama' =>  '-',
                'link' => 'https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd',
                'icon' => 'fa fa-maps-alt'
            ],
        ];

        foreach ($datas as $data) {
            DB::table('kontaks')->insert($data);
        }

        //Run : php artisan db:seed --class=KontakSeeder
    }
}
