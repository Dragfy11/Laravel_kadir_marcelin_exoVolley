<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EquipeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('equipes')->insert([
             [
                'coach' => 'Pas de coach',
                'equipe' => "Pas d'equipe",
                'ville' => 'Rien',
                'nombres' => '10',
                'pays_id' => 5,
                'membres' => 1,
             ],
             [
                 'coach' => 'Mustafa',
                 'equipe' => 'Barca',
                 'ville' => 'Barcelone',
                 'nombres' => '2',
                 'pays_id' => 3,
                 'membres' => 2,


             ],
             [
                 'coach' => 'Kadir',
                 'equipe' => 'Real',
                 'ville' => 'Madrid',
                 'nombres' => '5',
                 'pays_id' => 3,
                 'membres' => 3,

             ],
             [
                 'coach' => 'Albert',
                 'equipe' => 'Rollings',
                 'ville' => 'Colorado',
                 'nombres' => '7',
                 'pays_id' => 1,
                 'membres' => 0,

             ],
             [
                'coach' => 'Loup',
                'equipe' => 'Japan',
                'ville' => 'Tokyio',
                'nombres' => '6',
                'pays_id' => 4,
                'membres' => 1,

            ],
         ]);
    }
}
