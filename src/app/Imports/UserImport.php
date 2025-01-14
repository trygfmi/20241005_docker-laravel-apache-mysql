<?php

namespace App\Imports;

use App\Models\User;
use Maatwebsite\Excel\Concerns\ToModel;

class UserImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            //
            // $row[0]のようにrowを使用すると、csvファイルに記載しているカラム名まで取り込んでしまう
            'name' => $row[0],
            'email' => $row[1],
            'password' => bcrypt($row[2]), // パスワードをハッシュ化
        ]);
    }
}
