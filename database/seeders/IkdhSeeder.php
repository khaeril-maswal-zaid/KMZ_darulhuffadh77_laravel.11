<?php

namespace Database\Seeders;

use App\Models\Ikdh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class IkdhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $datas = [
            [
                'cabang' => 'Pusat',
                'tholabah_id' => '1'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '2'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '3'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '4'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '5'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '6'
            ],
            [
                'cabang' => 'anggota-pusat',
                'tholabah_id' => '7'
            ],
        ];

        foreach ($datas as $data) {
            DB::table('ikdhs')->insert($data);
        }
        Ikdh::factory(30)->create();
    }
}
