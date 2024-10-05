<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PokemonSleep\Foodlv1;

class CreatePokemonTemplate extends Model
{
    use HasFactory;

    public function foodlv1(){
        return $this->belongsTo(Foodlv1::class);
    }
}
