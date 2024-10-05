<?php

namespace App\Imports;

use App\Models\MainSkillTest;
use Maatwebsite\Excel\Concerns\ToModel;

class MainSkillTestImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new MainSkillTest([
            //
            // $row[1]のようにrowを使用すると、csvファイルに記載しているカラム名まで取り込んでしまう
            'main_skill' => $row[1],
        ]);
    }
}
