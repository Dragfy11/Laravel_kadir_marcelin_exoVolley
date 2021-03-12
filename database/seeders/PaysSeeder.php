<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PaysSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('pays')->insert([
            [
                'pays' => 'Turquie',
                'continent' => 'Asie'
            ],
            [
                'pays' => 'Etat-Unies',
                'continent' => 'Amérique du Nord'
            ],
            [
                'pays' => 'Espagne',
                'continent' => 'Europe'
            ],
            [
                'pays' => 'Japon',
                'continent' => 'Asie'
            ],
            [
                'pays' => 'Rien',
                'continent' => 'Rien'
            ],
        ]);
    }
}
