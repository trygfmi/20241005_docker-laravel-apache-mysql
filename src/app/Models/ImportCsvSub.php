<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportCsvSub extends Model
{
    use HasFactory;

    protected $fillable = [
        'sub_skill',
    ];
}
