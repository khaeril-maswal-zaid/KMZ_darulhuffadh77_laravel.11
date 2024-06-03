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
        Tholabah::factory(13)->create();
        Tholabah::factory(13)->pembesar()->create();
        Tholabah::factory(13)->alumni()->create();
        Tholabah::factory(13)->pengabdianLuar()->create();
        Tholabah::factory(13)->pembina()->create();
        Tholabah::factory(13)->santriBaru()->create();
        // Tholabah::factory(13)->create()->rundom;
    }
}
