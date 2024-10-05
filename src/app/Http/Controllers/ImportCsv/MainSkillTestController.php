<?php

namespace App\Http\Controllers\ImportCsv;

use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\MainSkillTestImport;
use App\Http\Controllers\Controller;

class MainSkillTestController extends Controller
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
    public function show(MainSkillTest $mainSkillTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainSkillTest $mainSkillTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainSkillTest $mainSkillTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainSkillTest $mainSkillTest)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new MainSkillTestImport, $request->file('file'));
        // $test = $request->file('file')->path();

        return redirect()->back()->with(['message' => 'csvファイルのインポートが成功しました']);
        // return redirect()->back()->with(['message' => $test]);
    }
}
