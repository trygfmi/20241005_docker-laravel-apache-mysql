<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportCsv extends Model
{
    use HasFactory;

    protected $fillable = [
        'main_skill',
    ];
}
