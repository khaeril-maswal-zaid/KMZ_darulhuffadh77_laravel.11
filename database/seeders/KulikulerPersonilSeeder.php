<?php

namespace Database\Seeders;

use App\Models\Kulikuler_personil;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class KulikulerPersonilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Kulikuler_personil::factory(100)->create();
    }
}
