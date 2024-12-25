<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\OwnPokemonComplete;
use App\Models\PokemonSleep\SubSkill;
use App\Models\PokemonSleep\Personality;

use Illuminate\Support\Facades\DB;


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

    public function editIndex(){
        $allPokemonList = OwnPokemonComplete::all();
        $foodlv30s = DB::table('own_pokemon_completes')
                        ->join('foodlv30s', 'own_pokemon_completes.encyclopedia_number', '=', 'foodlv30s.id')
                        ->select('own_pokemon_completes.*', 'foodlv30s.*')
                        ->get();
        $foodlv60s = DB::table('own_pokemon_completes')
                        ->join('foodlv60s', 'own_pokemon_completes.encyclopedia_number', '=', 'foodlv60s.id')
                        ->select('own_pokemon_completes.*', 'foodlv60s.*')
                        ->get();
        $allSubSkills = SubSkill::orderBy("sub_skill", "asc")->get();
        $allPersonalities = Personality::orderBy("personality", "asc")->get();
        // dd($foodlv30s);
        return view('pokemon-sleep.own-pokemon-complete-edit-pokemon-sleep', [
                                                                                "allPokemonList"=>$allPokemonList,
                                                                                "allSubSkills"=>$allSubSkills,
                                                                                "allPersonalities"=>$allPersonalities,
                                                                                "foodlv30s"=>$foodlv30s,
                                                                                "foodlv60s"=>$foodlv60s,
                                                                            ]);
    }

    public function edit(Request $request){
        // dd($request);

        for($i=0; $i<count($request->id); $i++){
            $id = $request->id[$i];
            $pokemon = OwnPokemonComplete::find($id);

            $pokemon->nickname = $request->nickname[$i];
            $pokemon->sp = $request->sp[$i];
            $pokemon->lv = $request->lv[$i];
            $pokemon->food_lv30 = $request->food_lv30[$i];
            $pokemon->food_lv60 = $request->food_lv60[$i];
            $pokemon->sub_skill_lv1 = $request->sub_skill_lv1[$i];
            $pokemon->sub_skill_lv25 = $request->sub_skill_lv25[$i];
            $pokemon->sub_skill_lv50 = $request->sub_skill_lv50[$i];
            $pokemon->sub_skill_lv75 = $request->sub_skill_lv75[$i];
            $pokemon->sub_skill_lv100 = $request->sub_skill_lv100[$i];
            $pokemon->remarks = $request->remarks[$i];

            $pokemon->save();
            // dd($pokemon);
        };
        
        return redirect()->back();
    }

    public function editIndex2(){
        $allPokemonList = OwnPokemonComplete::all();
        $foodlv30s = DB::table('own_pokemon_completes')
                        ->join('foodlv30s', 'own_pokemon_completes.encyclopedia_number', '=', 'foodlv30s.id')
                        ->select('own_pokemon_completes.*', 'foodlv30s.*')
                        ->get();
        $foodlv60s = DB::table('own_pokemon_completes')
                        ->join('foodlv60s', 'own_pokemon_completes.encyclopedia_number', '=', 'foodlv60s.id')
                        ->select('own_pokemon_completes.*', 'foodlv60s.*')
                        ->get();
        $allSubSkills = SubSkill::orderBy("sub_skill", "asc")->get();
        $allPersonalities = Personality::orderBy("personality", "asc")->get();
        // dd($foodlv30s);
        return view('pokemon-sleep.own-pokemon-complete-edit2-pokemon-sleep', [
                                                                                "allPokemonList"=>$allPokemonList,
                                                                                "allSubSkills"=>$allSubSkills,
                                                                                "allPersonalities"=>$allPersonalities,
                                                                                "foodlv30s"=>$foodlv30s,
                                                                                "foodlv60s"=>$foodlv60s,
                                                                            ]);
    }

    public function edit2(Request $request){
        // dd($request);

        for($i=0; $i<count($request->id); $i++){
            $id = $request->id[$i];
            $pokemon = OwnPokemonComplete::find($id);

            $pokemon->nickname = $request->nickname[$i];
            $pokemon->sp = $request->sp[$i];
            $pokemon->lv = $request->lv[$i];
            $pokemon->food_lv30 = $request->food_lv30[$i];
            $pokemon->food_lv60 = $request->food_lv60[$i];
            $pokemon->sub_skill_lv1 = $request->sub_skill_lv1[$i];
            $pokemon->sub_skill_lv25 = $request->sub_skill_lv25[$i];
            $pokemon->sub_skill_lv50 = $request->sub_skill_lv50[$i];
            $pokemon->sub_skill_lv75 = $request->sub_skill_lv75[$i];
            $pokemon->sub_skill_lv100 = $request->sub_skill_lv100[$i];
            $pokemon->remarks = $request->remarks[$i];

            $pokemon->save();
            // dd($pokemon);
        };
        
        return redirect()->back();
    }
}
