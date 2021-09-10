<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('types')->insert([
            ['type_name' => 'normal'],
            ['type_name' => 'combat'],
            ['type_name' => 'vol'],
            ['type_name' => 'poison'],
            ['type_name' => 'sol'],
            ['type_name' => 'roche'],
            ['type_name' => 'insecte'],
            ['type_name' => 'spectre'],
            ['type_name' => 'acier'],
            ['type_name' => 'feu'],
            ['type_name' => 'eau'],
            ['type_name' => 'plante'],
            ['type_name' => 'electrik'],
            ['type_name' => 'psy'],
            ['type_name' => 'glade'],
            ['type_name' => 'dragon'],
            ['type_name' => 'ténébres'],
            ['type_name' => 'fées']
        ]);

        DB::table('pokemon')->insert([
            [
                'nom' => 'Poke1',
                'img' => 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png',
                'lvl' => 99,
            ],
            [
                'nom' => 'Poke2',
                'img' => 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png',
                'lvl' => 20,
            ],
            [
                'nom' => 'Poke3',
                'img' => 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png',
                'lvl' => 30,
            ],
            [
                'nom' => 'Poke4',
                'img' => 'https://assets.stickpng.com/images/580b57fcd9996e24bc43c325.png',
                'lvl' => 40,
            ],
            
        ]);
    }
}
