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
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);


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
