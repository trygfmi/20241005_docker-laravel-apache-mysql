<?php

namespace App\Http\Controllers\ImportCsv;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\UserImport;
use App\Http\Controllers\Controller;

class UserController extends Controller
{
    //
    public function import(Request $request)
    {
        // アップロードされたファイルをインポート
        Excel::import(new UserImport, $request->file('file'));
        // $test = $request->file('file')->path();

        return redirect()->back()->with('success', 'CSVからデータがインポートされました。');
        // return redirect()->back()->with(['message' => $test]);
    }
}
