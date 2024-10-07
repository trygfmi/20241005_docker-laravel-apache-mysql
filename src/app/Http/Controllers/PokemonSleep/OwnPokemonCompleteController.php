<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\OwnPokemonComplete;

class OwnPokemonCompleteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
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
        return view('pokemon-sleep.search-own-pokemon-complete');
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

    public function getJson(Request $request){
        // $keyword = $request->keyword;
        $keyword = $request->keyword;
        $result = OwnPokemonComplete::where('sub_skill_lv1', $keyword)
                                    ->orWhere('sub_skill_lv25', $keyword)
                                    ->orWhere('sub_skill_lv50', $keyword)
                                    ->orWhere('sub_skill_lv75', $keyword)
                                    ->orWhere('sub_skill_lv100', $keyword)
                                    ->get();

        // 各行の列がキーワードに該当するかをtrueかfalseで持ちます
        $result_index_id_array = [];
        for($i=0; $i<count($result); $i++){
            $result_index_id_array = $result_index_id_array + [$i => ["id"=>$result[$i]['id'], 
                                                                      'boolean_lv1'=>false, 
                                                                      'boolean_lv25'=>false, 
                                                                      'boolean_lv50'=>false, 
                                                                      'boolean_lv75'=>false, 
                                                                      'boolean_lv100'=>false]
                                                              ];
        }


        $result_index_id_array = $this->setTrueFalseToCell($result_index_id_array, 'sub_skill_lv100', $keyword, 'lv100');
        $result_index_id_array = $this->setTrueFalseToCell($result_index_id_array, 'sub_skill_lv75', $keyword, 'lv75');
        $result_index_id_array = $this->setTrueFalseToCell($result_index_id_array, 'sub_skill_lv50', $keyword, 'lv50');
        $result_index_id_array = $this->setTrueFalseToCell($result_index_id_array, 'sub_skill_lv25', $keyword, 'lv25');
        $result_index_id_array = $this->setTrueFalseToCell($result_index_id_array, 'sub_skill_lv1', $keyword, 'lv1');
        

        // */
        // $result_number_id = ['number'=>count($result_sub_skill_lv100), 'id'=>$result_sub_skill_lv100[0]['id']];
        // $result_number_id = array('number'=>2, 'id'=>1);
        //dd($result);
        return response()->json(['message'=>$result, 'result_index_id_array'=>$result_index_id_array]);
    }

    // 該当するセルの色を変更するために該当セルに真偽値を設定する
    public function setTrueFalseToCell($result_index_id_array, $sub_skill_column_name, $keyword, $lv){
        // sub_skillのそれぞれのカラムでキーワードに該当する行のidを連想配列に挿入
        $result_sub_skill = OwnPokemonComplete::where($sub_skill_column_name, $keyword)->get();
        $result_sub_skill_count = count($result_sub_skill);
        $result_sub_skill_id_array = [];
        for($i=0; $i<$result_sub_skill_count; $i++){
            $result_sub_skill_id_array = $result_sub_skill_id_array + ["id$i"=>$result_sub_skill[$i]['id']];
        }

        // キーワードに該当するセルの真偽値をtrueにします
        for($i=0; $i<$result_sub_skill_count; $i++){
            for($j=0; $j<count($result_index_id_array); $j++){
                if($result_index_id_array[$j]['id'] == $result_sub_skill_id_array["id$i"]){
                    $result_index_id_array[$j]["boolean_$lv"] = true;
                }
            }
        }

        return $result_index_id_array;
    }
}
