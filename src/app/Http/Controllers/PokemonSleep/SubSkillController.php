<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use App\Models\SubSkill;
use Illuminate\Http\Request;

class SubSkillController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('pokemon-sleep.register-sub-skill');
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
        $sub_skill = $request->sub_skill;
        if(SubSkill::where('sub_skill', $sub_skill)->exists()){
            return redirect()->back()->with(['message' => '既に'.$sub_skill.'は登録されています'])->withInput();
        }

        $sub_skill_instance = new SubSkill();
        $sub_skill_instance->sub_skill = $sub_skill;
        $sub_skill_instance->save();

        return redirect()->back()->with(['message' => $sub_skill.'が登録されました']);
    }

    /**
     * Display the specified resource.
     */
    public function show(SubSkill $subSkill)
    {
        //
        $sub_skills = SubSkill::all();

        return view('pokemon-sleep.show-registered-sub-skills', ['sub_skills' => $sub_skills]);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SubSkill $subSkill)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SubSkill $subSkill)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SubSkill $subSkill)
    {
        //
    }
}
