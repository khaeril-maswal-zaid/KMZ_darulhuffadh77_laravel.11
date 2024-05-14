<?php

namespace Database\Seeders;

use App\Models\KulikulerPersonil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KulikulerPersonilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        KulikulerPersonil::factory(100)->create();
    }
}
