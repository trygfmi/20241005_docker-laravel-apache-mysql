<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ImportOwnPokemon;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ForeignIdPokemonImport;

class HelloAjaxController extends Controller
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
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function helloAjax(Request $request){
        // $ownPokemon = ImportOwnPokemon::all();
        $ownPokemon = ImportOwnPokemon::all()->toArray();

        return response()->json(['message' => $ownPokemon]);
        // return response()->json(['message' => $ownPokemon[0]]);
        // return response()->json(['message' => $ownPokemon->__toString()]);
        // return response()->json(['message' => 'Hello World']);
    }

    public function import(Request $request){
        Excel::import(new ForeignIdPokemonImport, $request->file('file'));

        return redirect()->back()->with('message', 'ok');
    }
}
