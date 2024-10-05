<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ImportOwnPokemon extends Model
{
    use HasFactory;

    protected $fillable = [
        'ポケモン名',
        "ニックネーム",
        'sp',
        'lv',
        '食材lv1',
        '食材lv30',
        '食材lv60',
        'メインスキル',
        'サブスキルlv1',
        'サブスキルlv25',
        'サブスキルlv50',
        'サブスキルlv75',
        'サブスキルlv100',
        '性格',
        '備考',
    ];
}
