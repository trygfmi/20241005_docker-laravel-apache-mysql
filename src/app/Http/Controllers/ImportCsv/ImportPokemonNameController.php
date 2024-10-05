<?php

namespace App\Http\Controllers\ImportCsv;

use App\Models\ImportPokemonName;
use Illuminate\Http\Request;
use App\Imports\ImportPokemonNameImport;
use Maatwebsite\Excel\Facades\Excel;
use App\Http\Controllers\Controller;



class ImportPokemonNameController extends Controller
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
    public function show(ImportPokemonName $importPokemonName)
    {
        //
        $pokemon_names = ImportPokemonName::all();

        return view('import-csv.show-import-pokemon-name', ['pokemon_names' => $pokemon_names]);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ImportPokemonName $importPokemonName)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ImportPokemonName $importPokemonName)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ImportPokemonName $importPokemonName)
    {
        //
    }

    public function import(Request $request){
        Excel::import(new ImportPokemonNameImport, $request->file('file'));

        return redirect()->back()->with(['message' => 'インポートが成功しました']);
    }
}
