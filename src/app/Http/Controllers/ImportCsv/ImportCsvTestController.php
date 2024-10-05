<?php

namespace App\Http\Controllers\ImportCsv;

use App\Models\importCsvTest;
use Illuminate\Http\Request;
use App\Imports\importCsvTestImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;



class ImportCsvTestController extends Controller
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
    public function show(importCsvTest $importCsvTest)
    {
        //
        $names = importCsvTest::all();

        return view('import-csv.show-import-csv-test', ['names' => $names]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(importCsvTest $importCsvTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, importCsvTest $importCsvTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(importCsvTest $importCsvTest)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new importCsvTestImport, $request->file('file'));

        return redirect()->back()->with(['message' => 'インポートが成功しました']);
    }
}
