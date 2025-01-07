<?php

namespace Database\Seeders\PokemonSleep;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class TestPreTablesSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('foodlv1s')->insert([

        ]);



        DB::table('foodlv30s')->insert([

        ]);



        DB::table('foodlv60s')->insert([

        ]);



        DB::table('create_pokemon_templates')->insert([

        ]);



        DB::table('create_pokemon_template2s')->insert([

        ]);



        DB::table('main_skills')->insert([

        ]);



        DB::table('create_pokemon_template3s')->insert([

        ]);



        DB::table('choice_pokemon_constraineds')->insert([

        ]);



        DB::table('sub_skills')->insert([
            
        ]);



        DB::table('personalities')->insert([

        ]);
    }
}
