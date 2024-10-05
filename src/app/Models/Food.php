<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;

class Food extends Model
{
    use HasFactory;

    public function setNameAttribute($value){
        $this->attributes['name'] = $value ?: null;
    }

    public function setEnergyAttribute($value){
        $this->attributes['energy'] = $value ?: null;
    }

}
