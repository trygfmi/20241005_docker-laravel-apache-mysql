<?php

namespace App\Http\Controllers\ImportCsv;

use App\Models\ImportCsvSub;
use Illuminate\Http\Request;
use App\Imports\ImportCsvSubImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;


class ImportCsvSubController extends Controller
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
    public function show(ImportCsvSub $importCsvSub)
    {
        //
        $sub_skills = ImportCsvSub::all();

        return view('import-csv.show-import-csv-sub', ['sub_skills' => $sub_skills]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImportCsvSub $importCsvSub)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImportCsvSub $importCsvSub)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImportCsvSub $importCsvSub)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new ImportCsvSubImport, $request->file('file'));

        return redirect()->back()->with(['message' => 'インポートが成功しました']);
    }
}
