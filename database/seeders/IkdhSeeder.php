<?php

namespace Database\Seeders;

use App\Models\Ikdh;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class IkdhSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Ikdh::factory(30)->create();
    }
}
