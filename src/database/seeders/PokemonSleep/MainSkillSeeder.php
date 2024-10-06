<?php

namespace Database\Seeders\PokemonSleep;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\DB;

class MainSkillSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        DB::table('main_skills')->insert([
            // /*
            ['id'=>1, 'main_skill'=>'エナジーチャージS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>2, 'main_skill'=>'エナジーチャージM', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>3, 'main_skill'=>'食材ゲットS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>4, 'main_skill'=>'料理パワーアップS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>5, 'main_skill'=>'おてつだいサポートS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>6, 'main_skill'=>'げんきチャージS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>7, 'main_skill'=>'げんきエールS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>8, 'main_skill'=>'げんきオールS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>9, 'main_skill'=>'ゆめのかけらゲットS', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>10, 'main_skill'=>'ゆびをふる', 'created_at'=>now(), 'updated_at'=>now()],
            // */
            // /*
            ['id'=>11, 'main_skill'=>'おてつだいブースト(でんき)', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>12, 'main_skill'=>'おてつだいブースト(ほのお)', 'created_at'=>now(), 'updated_at'=>now()],
            ['id'=>13, 'main_skill'=>'おてつだいブースト(みず)', 'created_at'=>now(), 'updated_at'=>now()],
            // */
            // ['id'=>14, 'main_skill'=>'料理チャンスS', 'created_at'=>now(), 'updated_at'=>now()],
        ]);
    }
}
