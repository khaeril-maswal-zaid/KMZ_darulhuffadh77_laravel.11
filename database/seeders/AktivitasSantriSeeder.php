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
        $datas = [
            [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '03:30 - 04:30',
                'agenda' => 'Sholat Tahjjud',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '04:30 - 05:00',
                'agenda' => 'Hifdzhul Qur`an',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '05:00 - 06:00',
                'agenda' => 'Sholat Subuh & Setor Hafalan',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '06:00 - 06:30',
                'agenda' => 'Kebahasaan',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '06:30 - 07:00',
                'agenda' => 'Mandi & Sarapan',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Belajar KMI',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '12:00 - 14:00',
                'agenda' => 'Sholat Zhuhur & Makan siang',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '14:00 - 15:15',
                'agenda' => 'Kursus Hardskill',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '15:15 - 17:00',
                'agenda' => 'Sholat Azhar & Qiroatul Qur`an',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '17:00 - 18:00',
                'agenda' => 'Mandi Sore',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '18:00 - 19:00',
                'agenda' => 'Sholat Maghrib & Makan malam',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '19:00 - 21:00',
                'agenda' => 'Sholat Isya & Qiroatul Qur`an',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '21:00 - 22:00',
                'agenda' => 'Belajar Malam',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '22:00 - 23:00',
                'agenda' => 'Kreativitas',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'harian',
                'hari' => 'Setiap hari',
                'waktu' => '23:00 - 03:30',
                'agenda' => 'Isterahat',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Jumat',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Sabtu',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Ahad',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Senin',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Selasa',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Rabu',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Kamis',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ], [
                'kategori' => 'mingguan',
                'hari' => 'Jumat',
                'waktu' => '07:00 - 12:00',
                'agenda' => 'Persidha',
                'picture' => 'carousel-1.jpg',
            ]
        ];

        foreach ($datas as $data) {
            DB::table('aktivitas_santris')->insert($data);
        }

        //Run : php artisan db:seed --class=AktivitasSantriSeeder
    }
}
