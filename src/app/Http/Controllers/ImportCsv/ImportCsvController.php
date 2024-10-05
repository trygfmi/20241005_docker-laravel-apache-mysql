<?php

namespace App\Http\Controllers\ImportCsv;

use App\Models\ImportCsv;
use Illuminate\Http\Request;
use App\Imports\ImportCsvImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class ImportCsvController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(ImportCsv $importCsv)
    {
        //
        $main_skills = ImportCsv::all();

        return view('import-csv.show-import-csv', ['main_skills' => $main_skills]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImportCsv $importCsv)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImportCsv $importCsv)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImportCsv $importCsv)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new ImportCsvImport, $request->file('file'));

        return redirect()->back()->with(['message' => 'インポートが成功しました']);
    }
}
