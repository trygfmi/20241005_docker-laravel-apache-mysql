<?php

namespace App\Imports;

use App\Models\ImportCsvSub;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCsvSubImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportCsvSub([
            //
            'sub_skill' => $row['sub_skill'],
        ]);
    }
}
