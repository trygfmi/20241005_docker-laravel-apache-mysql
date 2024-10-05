<?php

namespace App\Imports;

use App\Models\PokemonSleep\ForeignIdPokemon;
use Maatwebsite\Excel\Concerns\ToModel;

use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ForeignIdPokemonImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ForeignIdPokemon([
            //
            'ポケモン名' => $row['pokemon_name'],
            'ニックネーム' => $row['nickname'],
            'sp' => $row['sp'],
            'lv' => $row['lv'],
            '食材lv1' => $row['food_lv1'],
            '食材lv30' => $row['food_lv30'],
            '食材lv60' => $row['food_lv60'],
            'main_skill_id' => $row['main_skill_id'],
            'サブスキルlv1' => $row['sub_skill_lv1'],
            'サブスキルlv25' => $row['sub_skill_lv25'],
            'サブスキルlv50' => $row['sub_skill_lv50'],
            'サブスキルlv75' => $row['sub_skill_lv75'],
            'サブスキルlv100' => $row['sub_skill_lv100'],
            '性格' => $row['personality'],
            '備考' => $row['remarks'],
        ]);
    }
}
