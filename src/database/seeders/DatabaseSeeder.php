<?php

namespace Database\Seeders;

use App\Models\User;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

use Database\Seeders\PokemonSleep\PersonalitySeeder;
use Database\Seeders\PokemonSleep\Foodlv1Seeder;
use Database\Seeders\PokemonSleep\ChoicePokemonConstrainedSeeder;
use Database\Seeders\PokemonSleep\Foodlv30Seeder;
use Database\Seeders\PokemonSleep\Foodlv60Seeder;
use Database\Seeders\PokemonSleep\SubSkillSeeder;
use Database\Seeders\PokemonSleep\MainSkillSeeder;
use Database\Seeders\PokemonSleep\CreatePokemonTemplate3Seeder;
use Database\Seeders\PokemonSleep\OwnPokemonCompleteSeeder;
use Database\Seeders\PokemonSleep\CreatePokemonTemplateSeeder;
use Database\Seeders\PokemonSleep\CreatePokemonTemplate2Seeder;
use Database\Seeders\PokemonSleep\OwnPokemonCompleteSeederSeeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        /*
        User::factory()->create([
            'name' => 'Test User',
            'email' => 'test@example.com',
        ]);
        */

        // $this->call(Foodlv1Seeder::class);
        // $this->call(Foodlv30Seeder::class);
        // $this->call(Foodlv60Seeder::class);
        // $this->call(CreatePokemonTemplateSeeder::class);
        // $this->call(CreatePokemonTemplate2Seeder::class);
        // $this->call(MainSkillSeeder::class);
        // $this->call(CreatePokemonTemplate3Seeder::class);
        // $this->call(ChoicePokemonConstrainedSeeder::class);
        // $this->call(SubSkillSeeder::class);
        // $this->call(PersonalitySeeder::class);
        // $this->call(OwnPokemonCompleteSeeder::class);
        // $this->call(OwnPokemonCompleteSeederSeeder::class);
        // $this->call(BackupSeeder::class)
    }
}
