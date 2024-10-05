<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PokemonSleep\Foodlv1;
use App\Models\PokemonSleep\Foodlv30;
use App\Models\PokemonSleep\Foodlv60;
use App\Models\MainSkill;

class CreatePokemonTemplate3 extends Model
{
    use HasFactory;

    public function food_lv1(){
        return $this->belongsTo(Foodlv1::class);
    }

    public function food_lv30(){
        return $this->belongsTo(Foodlv30::class);
    }

    public function food_lv60(){
        return $this->belongsTo(Foodlv60::class);
    }

    public function main_skill(){
        return $this->belongsTo(MainSkill::class);
    }
}
