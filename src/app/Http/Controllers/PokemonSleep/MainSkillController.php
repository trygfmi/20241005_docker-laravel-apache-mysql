<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use App\Models\MainSkill;
use Illuminate\Http\Request;

class MainSkillController extends Controller
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
        // /*
        $main_skill = $request->main_skill;
        if(MainSkill::where('main_skill', $main_skill)->exists()){
            return redirect()->back()->with(['message' => '既に'.$main_skill.'は登録されています']);
        }
        $mainSkill = new MainSkill();
        $mainSkill->main_skill = $main_skill;
        $mainSkill->save();
        // */

        // return redirect()->route('register-main-skill')->with(['main_skill' => $main_skill]);
        return redirect()->back()->with(['main_skill' => $main_skill.':test version']);
    }

    /**
     * Display the specified resource.
     */
    public function show(MainSkill $mainSkill)
    {
        //
        $main_skills = MainSkill::all();
        // return route('show-registered-main-skills')->with(['main_skills' => $main_skills]);
        return view('pokemon-sleep.show-registered-main-skills', ['main_skills' => $main_skills]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(MainSkill $mainSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, MainSkill $mainSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(MainSkill $mainSkill)
    {
        //
    }
}
