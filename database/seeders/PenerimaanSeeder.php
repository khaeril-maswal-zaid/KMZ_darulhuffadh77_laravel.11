<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PenerimaanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'sub' => 'Syarat Pendaftaran',
                'body' => 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, consectetur neque! Quam est, vitae tempore dignissimos debitis aperiam nihil aspernatur eaque aut, praesentium tenetur hic veniam facilis sit, ab dolorem?'
            ],
            [
                'sub' => 'Dokumen Pendaftaran',
                'body' => 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, consectetur neque! Quam est, vitae tempore dignissimos debitis aperiam nihil aspernatur eaque aut, praesentium tenetur hic veniam facilis sit, ab dolorem?'
            ],
            [
                'sub' => 'Alur  Pendaftaran',
                'body' => 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, consectetur neque! Quam est, vitae tempore dignissimos debitis aperiam nihil aspernatur eaque aut, praesentium tenetur hic veniam facilis sit, ab dolorem?'
            ],
            [
                'sub' => 'Jadwal  Pendaftaran',
                'body' => 'lorem Lorem ipsum dolor sit amet, consectetur adipisicing elit. Aperiam, consectetur neque! Quam est, vitae tempore dignissimos debitis aperiam nihil aspernatur eaque aut, praesentium tenetur hic veniam facilis sit, ab dolorem?'
            ],
        ];

        foreach ($datas as $data) {
            DB::table('penerimaans')->insert($data);
        }
    }
}
