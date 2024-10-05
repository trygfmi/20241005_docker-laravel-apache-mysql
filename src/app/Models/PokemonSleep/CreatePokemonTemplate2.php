<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\PokemonSleep\Foodlv1;
use App\Models\PokemonSleep\Foodlv30;
use App\Models\PokemonSleep\Foodlv60;

class CreatePokemonTemplate2 extends Model
{
    use HasFactory;

    // migrationのforeignid()で設定したカラム名から_idを取り除いた名前のメソッド名にする
    public function food_lv1(){
        return $this->belongsTo(Foodlv1::class);
    }

    public function food_lv30(){
        return $this->belongsTo(Foodlv30::class);
    }

    public function food_lv60(){
        return $this->belongsTo(Foodlv60::class);
    }
}
