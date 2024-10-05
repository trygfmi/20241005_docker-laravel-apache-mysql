<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PokemonSleep\CreatePokemonTemplate;
use App\Models\PokemonSleep\CreatePokemonTemplate2;
use App\Models\PokemonSleep\CreatePokemonTemplate3;

class ChoicePokemonConstrained extends Model
{
    use HasFactory;

    public function create_pokemon_template(){
        return $this->belongsTo(CreatePokemonTemplate::class);
    }

    public function create_pokemon_template2(){
        return $this->belongsTo(CreatePokemonTemplate2::class);
    }

    public function create_pokemon_template3(){
        return $this->belongsTo(CreatePokemonTemplate3::class);
    }
}
