<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class FirmaTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Firma Created
        \App\Models\Firma::factory(100)->create();
    }
}
