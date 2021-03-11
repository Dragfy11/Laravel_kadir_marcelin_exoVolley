<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProfilSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        
         DB::table('profils')->insert([
             [
                'nom' => 'Uzumaki',
                'prenom' => "Naruto",
                'age' => 25,
                'numeros' => '3232123121',
                'email' => 'Naruto-Uzumaki@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Japan',
                'photo' => 'head2.png',
                'equipes_id' => 3,
                'poste_id' => 2,

             ],
             [
                'nom' => 'Haruno',
                'prenom' => "Sakura",
                'age' => 22,
                'numeros' => '3242123141',
                'email' => 'Sakura-Haruno@gmail.com',
                'genre' => 'Femme',
                'origin' => 'Japan',
                'photo' => 'Onizuka.png',
                'equipes_id' => 3,
                'poste_id' => 4,

             ],
             [
                'nom' => 'Uchiwa',
                'prenom' => "Sasuke",
                'age' => 25,
                'numeros' => '3423234252',
                'email' => 'Sasuke-Uchiwa@gmail.com',
                'genre' => 'Homme',
                'origin' => 'Japan',
                'photo' => 'head.png',
                'equipes_id' => 2,
                'poste_id' => 2,
             ],
             [
                'nom' => 'Hyûga',
                'prenom' => "Hinata",
                'age' => 22,
                'numeros' => '325532565',
                'email' => 'Hinata-Hyûga@gmail.com',
                'genre' => 'Femme',
                'origin' => 'Japan',
                'photo' => 'head2.png',
                'equipes_id' => 1,
                'poste_id' => 3,
             ],
         ]);
    }
}
