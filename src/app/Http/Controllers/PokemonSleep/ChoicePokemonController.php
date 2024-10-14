<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\ChoicePokemon;
use App\Models\PokemonSleep\ChoicePokemonConstrained;
use App\Models\PokemonSleep\CreatePokemonTemplate;
use App\Models\PokemonSleep\Foodlv1;
use App\Models\SubSkill;
use App\Models\PokemonSleep\Personality;
use App\Models\PokemonSleep\OwnPokemonComplete;

use Illuminate\Support\Facades\DB;

class ChoicePokemonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        /*
        DB::enableQueryLog();
        ChoicePokemonConstrained::whereRaw('BINARY name = ?', ['カラカラ'])->get();
        dd(DB::getQueryLog());
        */
        // dd(response());
        //dd(ChoicePokemonConstrained::with('create_pokemon_templates')->get());
        $choice_pokemon = ChoicePokemonConstrained::orderBy('name', 'asc')->get();
        // dd($choice_pokemon);

        // $test = ChoicePokemonConstrained::with('create_pokemon_template.foodlv1')->get();
        // dd($test);


        return view('pokemon-sleep.choice-pokemon', ['choice_pokemon' => $choice_pokemon]);
        // return view('pokemon-sleep.choice-pokemon');
    }

    public function getPokemonTemplate(Request $request){
        // $choice_pokemon = ChoicePokemon::where('name', $request->selectPokemonName)->get();
        $choice_pokemon_name = $request->selectPokemonName;

        $choice_pokemon = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->get();
        // $choice_pokemon = ChoicePokemonConstrained::whereRaw('BINARY name = ?', [$request->selectPokemonName])->get();
        $choice_pokemon_id = $choice_pokemon[0];

        $test = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->get();

        $foodlv1 = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->with('create_pokemon_template2.food_lv1')->get();
        $foodlv1_food1 = $foodlv1[0]->create_pokemon_template2->food_lv1->food1;

        $foodlv30 = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->with('create_pokemon_template2.food_lv30')->get();
        $foodlv30_food1 = $foodlv30[0]->create_pokemon_template2->food_lv30->food1;
        $foodlv30_food2 = $foodlv30[0]->create_pokemon_template2->food_lv30->food2;

        $foodlv60 = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->with('create_pokemon_template2.food_lv60')->get();
        $foodlv60_food1 = $foodlv60[0]->create_pokemon_template2->food_lv60->food1;
        $foodlv60_food2 = $foodlv60[0]->create_pokemon_template2->food_lv60->food2;
        $foodlv60_food3 = $foodlv60[0]->create_pokemon_template2->food_lv60->food3;

        $main_skill_array = ChoicePokemonConstrained::where('name', $request->selectPokemonName)->with('create_pokemon_template3.main_skill')->get();
        $main_skill = $main_skill_array[0]->create_pokemon_template3->main_skill->main_skill;

        $sub_skill_array = SubSkill::orderBy('sub_skill', 'asc')->get();

        $personality_array = Personality::orderBy('personality', 'asc')->get();

        return response()->json([
                                //  'choice_pokemon'=>$choice_pokemon, 
                                "choice_pokemon_name"=>$choice_pokemon_name,
                                "choice_pokemon_id"=>$choice_pokemon_id,
                                'foodlv1_food1'=>$foodlv1_food1,
                                'foodlv30_food1'=>$foodlv30_food1, 'foodlv30_food2'=>$foodlv30_food2,
                                'foodlv60_food1'=>$foodlv60_food1, 'foodlv60_food2'=>$foodlv60_food2, 'foodlv60_food3'=>$foodlv60_food3,
                                // 'food'=>$food,
                                'main_skill'=>$main_skill,
                                'sub_skill'=>$sub_skill_array,
                                'personality'=>$personality_array,
                                'test'=>$test,
                                ]);
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
        // dd($request);
        // dd($request->own_pokemon_name);
        for($i=0; $i<count($request->choice_pokemon_id); $i++){
            $id = $request->choice_pokemon_id[$i];
            $own_pokemon_name = $request->own_pokemon_name[$i];
            $nickname = $request->nickname[$i];
            $sp = $request->sp[$i];
            $lv = $request->lv[$i];
            $food_lv1 = $request->food_lv1[$i];
            $food_lv30 = $request->food_lv30[$i];
            $food_lv60 = $request->food_lv60[$i];
            $main_skill = $request->main_skill[$i];
            $sub_skill_lv1 = $request->sub_skill_lv1[$i];
            $sub_skill_lv25 = $request->sub_skill_lv25[$i];
            $sub_skill_lv50 = $request->sub_skill_lv50[$i];
            $sub_skill_lv75 = $request->sub_skill_lv75[$i];
            $sub_skill_lv100 = $request->sub_skill_lv100[$i];
            $personality = $request->personality[$i];
            $remarks = $request->remarks[$i];



            $createdPokemon = OwnPokemonComplete::create([
                'own_pokemon_name'=>$own_pokemon_name,
                'nickname'=>$nickname,
                'sp'=>$sp,
                'lv'=>$lv,
                'food_lv1'=>$food_lv1,
                'food_lv30'=>$food_lv30, 
                'food_lv60'=>$food_lv60, 
                'main_skill'=>$main_skill, 
                'sub_skill_lv1'=>$sub_skill_lv1, 
                'sub_skill_lv25'=>$sub_skill_lv25, 
                'sub_skill_lv50'=>$sub_skill_lv50, 
                'sub_skill_lv75'=>$sub_skill_lv75, 
                'sub_skill_lv100'=>$sub_skill_lv100, 
                'personality'=>$personality, 
                'remarks'=>$remarks, 
                'created_at'=>now(), 
                'updated_at'=>now(), 
                'image_path'=>'images/'.$id.'.png',
                'shiny_image_path'=>'images/shiny/'.$id.'.png',
            ]);
            
            $createdPokemon->save();
        }
        

        return redirect()->back()->with('success-register', "登録されました");
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
}
