<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $firma = $this->call(
        [
            // Call every seeder to Default Database Seeder
            FirmaTableSeeder::class,
            ProjektTableSeeder::class,
        ]
    );
    }
}
