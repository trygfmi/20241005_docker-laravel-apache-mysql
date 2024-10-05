<?php

namespace App\Http\Controllers\Ajax;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use Maatwebsite\Excel\Facades\Excel;
use App\Imports\ForeignIdPokemonImport;

use App\Models\PokemonSleep\ForeignIdPokemon;

use Illuminate\Support\Facades\DB;


class ForeignIdPokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('ajax.import-foreign-id-pokemon');
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
    public function show(Request $request)
    {
        //
        // DB::enableQueryLog();
        // dd(ForeignIdPokemon::with('main_skill'));
        // select * from `foreign_id_pokemonのみ実行される
        // dd(ForeignIdPokemon::with('main_skills')->get());
        // ForeignIdPokemonモデルのリレーションメソッド名（取り出したいテーブルのテーブル名）
        // を引数に入れる必要がある
        // select * from `foreign_id_pokemonと
        // select * from `main_skills` where `main_skills`.`id` in (1, 5, 10)
        // が実行される
        $op = ForeignIdPokemon::with(['main_skill' => function($query){
            $query->select('id', 'main_skill');
        }])->get();
        // dd(DB::getQueryLog());
        // dd($op);

        return view('ajax.show-foreign-id-pokemon', ['ownPokemon' => $op]);
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

    public function import(Request $request){
        Excel::import(new ForeignIdPokemonImport, $request->file('file'));

        return redirect()->back()->with('message', 'ok');
    }
}
