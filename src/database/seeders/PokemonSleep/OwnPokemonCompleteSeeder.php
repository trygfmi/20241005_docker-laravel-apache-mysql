<?php

namespace Database\Seeders\PokemonSleep;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class OwnPokemonCompleteSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('own_pokemon_completes')->insert([
            [
                'own_pokemon_name'=>'ピカチュウ',
                'nickname'=>'',
                'sp'=>597,
                'lv'=>9,
                'food_lv1'=>'モーモーミルク',
                'food_lv30'=>'モーモーミルク', 
                'food_lv60'=>'モーモーミルク', 
                'main_skill'=>'食料ゲットS', 
                'sub_skill_lv1'=>'スキル確率アップS', 
                'sub_skill_lv25'=>'スキル確率アップS', 
                'sub_skill_lv50'=>'スキル確率アップS', 
                'sub_skill_lv75'=>'スキル確率アップS', 
                'sub_skill_lv100'=>'スキル確率アップS', 
                'personality'=>'さみしがり', 
                'remarks'=>'', 
                'created_at'=>now(), 
                'updated_at'=>now(), 
            ],
        ]);
    }
}
