<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PokemonSleep\ForeignIdPokemon;

class MainSkill extends Model
{
    use HasFactory;

    public function foreignIdPokemon(){
        //dd($this->hasOne(ForeignIdPokemon::class));
        // return $this->hasOne(ForeignIdPokemon::class);
    }
}
