<?php

namespace App\Imports;

use App\Models\ImportCsv;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportCsvImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportCsv([
            //
            'main_skill' => $row['main_skill'],
        ]);
    }
}
