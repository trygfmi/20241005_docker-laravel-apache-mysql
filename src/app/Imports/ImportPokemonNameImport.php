<?php

namespace App\Imports;

use App\Models\ImportPokemonName;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ImportPokemonNameImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new ImportPokemonName([
            //
            'pokemon_name' => $row['pokemon_name'],
        ]);
    }
}
