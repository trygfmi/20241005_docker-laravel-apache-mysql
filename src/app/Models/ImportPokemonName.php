<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportPokemonName extends Model
{
    use HasFactory;

    protected $fillable = [
        'pokemon_name',
    ];
}
