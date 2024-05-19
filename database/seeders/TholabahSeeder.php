<?php

namespace Database\Seeders;

use App\Models\Tholabah;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class TholabahSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Tholabah::factory(55)->create();
    }
}
