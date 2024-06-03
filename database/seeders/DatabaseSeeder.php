<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            UsersSeeder::class,
            TholabahSeeder::class,
            AktivitasSantriSeeder::class,
            BlogSeeder::class,
            IkdhSeeder::class,
            KontakSeeder::class,
            KulikulerSeeder::class,
            KulikulerPersonilSeeder::class
        ]);

        //Run ALL : php artisan db:seed --class=DatabaseSeeder
    }
}
