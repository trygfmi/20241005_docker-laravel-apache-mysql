<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OwnPokemonComplete extends Model
{
    use HasFactory;

    protected $fillable = [
        'encyclopedia_number',
        'own_pokemon_name',
        'nickname',
        'sp',
        'lv',
        'food_lv1',
        'food_lv30',
        'food_lv60',
        'main_skill',
        'sub_skill_lv1',
        'sub_skill_lv25',
        'sub_skill_lv50',
        'sub_skill_lv75',
        'sub_skill_lv100',
        'personality',
        'remarks',
        'created_at',
        'updated_at',
        'image_path',
        'shiny_image_path',
    ];
}
