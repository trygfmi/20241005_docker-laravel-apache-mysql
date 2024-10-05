<?php

namespace App\Http\Controllers\ImportCsv;

use App\Models\SubSkillImportTest;
use Illuminate\Http\Request;
use App\Imports\SubSkillImportTestImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;

class SubSkillImportTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $skills = SubSkillImportTest::all();

        return view('import-csv.index-sub-skill-import-test', ['skills' => $skills]);
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
    public function show(SubSkillImportTest $subSkillImportTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubSkillImportTest $subSkillImportTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubSkillImportTest $subSkillImportTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubSkillImportTest $subSkillImportTest)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new SubSkillImportTestImport, $request->file('file'));
        
        return redirect()->back()->with(['message' => "インポートが成功しました"]);
    }
}
