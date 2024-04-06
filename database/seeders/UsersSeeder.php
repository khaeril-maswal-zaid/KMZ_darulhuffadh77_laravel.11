<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;


class UsersSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [[
            'name' => 'Khaeril Maswal Zaid',
            'email' => 'muhammadkhaerilzaid@gmail.com',
            'password' => '$2y$10$N.GpYy0w7qPbUqZ7Lps7Se3O0yH8nfs.ZXnHOilEspeArvM2WIho2'
        ]];

        foreach ($datas as $data) {
            DB::table('users')->insert($data);
        }

        //PINDAHKAN KE CONTROLLER:
        //dd(password_hash('maahadii165', PASSWORD_DEFAULT));
        //PASSWORD: maahadii165
    }
}
