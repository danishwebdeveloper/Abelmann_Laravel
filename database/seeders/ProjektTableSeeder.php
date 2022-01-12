<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProjektTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        // \App\Models\Projekt::factory(150)->create();

        $firmas = \App\Models\Firma::all();

        if ($firmas->count() === 0) {
            $this->command->info('There are no Firmas Yet!! Thanks');
            return;
        }

        $projectsCount = (int)$this->command->ask('How many Projects would you like?', 500);  //Ask how many Project you want to Create

        // Project Created
        \App\Models\Projekt::factory($projectsCount)->make()->each(function($projekt) use ($firmas){
            $projekt->firma_id = $firmas->random()->id;
            $projekt->save();
        });
    }
}
