<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\OwnPokemonComplete;
use App\Models\SubSkill;

class OwnPokemonCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        // $result = OwnPokemonComplete::where('sub_skill_lv1', "きのみの数S")->pluck('id');
        /*
        $result = OwnPokemonComplete::where('sub_skill_lv1', "きのみの数S")
                                    ->orWhere('sub_skill_lv25', "きのみの数S")
                                    ->orWhere('sub_skill_lv50', "きのみの数S")
                                    ->orWhere('sub_skill_lv75', "きのみの数S")
                                    ->orWhere('sub_skill_lv100', "きのみの数S")
                                    ->pluck('id');
        */
        /*
        $result = OwnPokemonComplete::select('id')
                                    ->where('sub_skill_lv1', "きのみの数S")
                                    ->get();
        */
        $result = OwnPokemonComplete::select('id', 'own_pokemon_name')
                                    ->where('sub_skill_lv1', "きのみの数S")
                                    ->get();
        // */
        // dd($result);
        $result = OwnPokemonComplete::all();

        return view('pokemon-sleep.show-own-pokemon-complete', ['result'=>$result]);
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

    public function delete(Request $request){
        // dd($request);
        $deletePokemonNumber = count($request->deleteId);
        for($i=0; $i<$deletePokemonNumber; $i++){
            OwnPokemonComplete::find($request->deleteId[$i])->delete();
        }
        
        return redirect()->back()->with('success-delete','削除されました');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }

    public function searchIndex()
    {
        //
        $sub_skills = SubSkill::orderby('sub_skill', 'asc')->get();
        return view('pokemon-sleep.search-own-pokemon-complete', ['sub_skills'=>$sub_skills]);
    }

    public function search(Request $request){
        // $keyword = $request->keyword;
        $keyword = $request->keyword;
        $result = OwnPokemonComplete::where('sub_skill_lv1', $keyword)
                                    ->orWhere('sub_skill_lv25', $keyword)
                                    ->orWhere('sub_skill_lv50', $keyword)
                                    ->orWhere('sub_skill_lv75', $keyword)
                                    ->orWhere('sub_skill_lv100', $keyword)
                                    ->get();

        //dd($result);
        return view('pokemon-sleep.search-own-pokemon-complete', ['result'=>$result]);
    }

    // 各セルにtrueかfalseを持つ配列を返す
    public function getJson(Request $request){
        // $keyword = $request->keyword;
        $keyword = $request->keyword;
        $result = OwnPokemonComplete::where('sub_skill_lv1', $keyword)
                                    ->orWhere('sub_skill_lv25', $keyword)
                                    ->orWhere('sub_skill_lv50', $keyword)
                                    ->orWhere('sub_skill_lv75', $keyword)
                                    ->orWhere('sub_skill_lv100', $keyword)
                                    ->get();



         // 各sub_skill_lvのkeywordに該当する行のidを取得
        $sub_skill_lv100_id_array = OwnPokemonComplete::where('sub_skill_lv100', $keyword)
                                                            ->pluck('id');
        $sub_skill_lv75_id_array = OwnPokemonComplete::where('sub_skill_lv75', $keyword)
                                                            ->pluck('id');
        $sub_skill_lv50_id_array = OwnPokemonComplete::where('sub_skill_lv50', $keyword)
                                                            ->pluck('id');
        $sub_skill_lv25_id_array = OwnPokemonComplete::where('sub_skill_lv25', $keyword)
                                                            ->pluck('id');
        $sub_skill_lv1_id_array = OwnPokemonComplete::where('sub_skill_lv1', $keyword)
                                                            ->pluck('id');

        

        // 計算量が多くなるのでクライアントサイド側で判定処理を実施
        return response()->json([
            'message'=>$result, 
            'sub_skill_lv100_id_array'=>$sub_skill_lv100_id_array,
            'sub_skill_lv75_id_array'=>$sub_skill_lv75_id_array,
            'sub_skill_lv50_id_array'=>$sub_skill_lv50_id_array,
            'sub_skill_lv25_id_array'=>$sub_skill_lv25_id_array,
            'sub_skill_lv1_id_array'=>$sub_skill_lv1_id_array,
        ]);

    }
}
