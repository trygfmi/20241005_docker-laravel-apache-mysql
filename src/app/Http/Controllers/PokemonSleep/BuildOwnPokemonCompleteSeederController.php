<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use App\Models\PokemonSleep\OwnPokemonComplete;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\OwnPokemonCompleteSeeders;


class BuildOwnPokemonCompleteSeederController extends Controller
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
    public function show()
    {
        //
        $ownPokemonCompleteSeeder = OwnPokemonCompleteSeeders::all();

        return view('pokemon-sleep.show-build-own-pokemon-complete-seeder', ['ownPokemonCompleteSeeder'=>$ownPokemonCompleteSeeder]);
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

    public function buildSeeder(){
        $ownPokemonComplete = OwnPokemonComplete::all();

        return view('pokemon-sleep.build-own-pokemon-complete-seeder', ['ownPokemonComplete'=>$ownPokemonComplete]);
    }
}
