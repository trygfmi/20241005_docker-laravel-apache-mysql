<?php

namespace App\Models\PokemonSleep;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

use App\Models\MainSkill;

class ForeignIdPokemon extends Model
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
        'main_skill_id',
        'サブスキルlv1',
        'サブスキルlv25',
        'サブスキルlv50',
        'サブスキルlv75',
        'サブスキルlv100',
        '性格',
        '備考',
    ];

    // メソッド名はテーブル名と同じにする必要がある
    public function main_skill(){
        // dd($this->belongsTo(MainSkill::class));
        return $this->belongsTo(MainSkill::class);
    }
}
