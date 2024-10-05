<?php

namespace Database\Seeders\PokemonSleep;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class ForeignIdPokemon extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('foreign-id-pokemon')->insert([

        ]);
    }
}
