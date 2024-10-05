<?php

namespace App\Imports;

use App\Models\SubSkillImportTest;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SubSkillImportTestImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new SubSkillImportTest([
            //
            // カラム名も含めて取り込む
            // 'sub_skill' => $row[0],
            // カラム名は取り込まない
            'sub_skill' => $row['sub_skill'],
        ]);
    }

    
}
