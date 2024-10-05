<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use App\Models\SubSkillImportTest;
use App\Models\SubSkill;
use Illuminate\Http\Request;
use App\Models\ImportOwnPokemon;

class SearchNutController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view("search-nut", ['message' => "ok"]);
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

    public function search(Request $request){
        // dd($request->selectName);
        $selectName = $request->selectName;
        $keyword = $request->keyword;

        // dd(SubSkillImportTest::where('sub_skill', $keyword));
        // dd(SubSkillImportTest::where("sub_skill", "きのみの数S")->get()->toArray());
        // $record = SubSkillImportTest::where('sub_skill', $keyword)->get()->toArray();
        $record = ImportOwnPokemon::where('サブスキルlv1', $keyword)
                                ->orWhere('サブスキルlv25', $keyword)
                                ->orWhere('サブスキルlv50', $keyword)
                                ->orWhere('サブスキルlv75', $keyword)
                                ->orWhere('サブスキルlv100', $keyword)
                                ->get()->toArray();
        // $record = SubSkill::where('sub_skill', $keyword)->get()->toArray();
        // $record = SubSkillImportTest::where('sub_skill', $keyword)->get()->__toString();
        // return view('search-nut', ['message' => $input]);
        // return redirect()->back()->with('input', $record[0]['sub_skill']);
        if($record){
            return redirect()->back()->with(['input' => $record, 'selectName' => $selectName]);
        }else{
            // return dd(redirect()->back()->with(['message' => "検索ワードでヒットしませんでした"], ['record' => $record]));
            return redirect()->back()->with(['message' => "検索ワードでヒットしませんでした"], ['record' => $record]);
            // return redirect()->back()->with('message', $record);
        }
        
    }

    public function getJson(Request $request){
        $keyword = $request->keyword;
        

        // dd(SubSkillImportTest::where('sub_skill', $keyword));
        // dd(SubSkillImportTest::where("sub_skill", "きのみの数S")->get()->toArray());
        // $record = SubSkillImportTest::where('sub_skill', $keyword)->get()->toArray();
        $message = ImportOwnPokemon::where('サブスキルlv1', $keyword)
                                ->orWhere('サブスキルlv25', $keyword)
                                ->orWhere('サブスキルlv50', $keyword)
                                ->orWhere('サブスキルlv75', $keyword)
                                ->orWhere('サブスキルlv100', $keyword)
                                ->get()->toArray();
        // $message = ImportOwnPokemon::all()->toArray();

        return response()->json(['message' => $message]);
    }
}
