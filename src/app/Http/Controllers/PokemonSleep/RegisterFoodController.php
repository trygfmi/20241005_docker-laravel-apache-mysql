<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class RegisterFoodController extends Controller
{
    //
    public function insert_test(Request $request){
        $food = $request->food;
        $energy = $request->energy;

        return redirect()->route('insert-food-test')->with(['food'=>$food, 'energy'=>$energy]);
    }

    public function insert(Request $request){
        $food = $request->food;
        $energy = $request->energy;

        $exists = Food::where('name', $food)->exists();
        if($exists){
            return redirect()->back()->with('error', '既に'.$food.'は登録されています。');
        }

        $food_instance = new Food();
        $food_instance->name = $food;
        $food_instance->energy = $energy;
        $food_instance->save();

        return redirect()->route('insert-food')->with(['food'=>$food, 'energy'=>$energy]);
    }
}
