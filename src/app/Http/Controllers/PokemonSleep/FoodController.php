<?php

namespace App\Http\Controllers\PokemonSleep;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Food;

class FoodController extends Controller
{
    //
    public function index(){
        // dd(Food::all());
        $foods = Food::all();
        return view('pokemon-sleep.food', ['foods' => $foods]);
        
        //return view('food');
    }

    public function store(Request $request){

    }

    public function save(){
        // /*
        $food = new Food();
        $food->name = 'とくせんリンゴ';
        $food->energy = 100;
        $food->save();
        // */
        // $food = Food::find(3);
        // $food->name = "とくせんリンゴ";
        // $food->save();

        $foods = Food::all();
        return view('pokemon-sleep.food', ['foods' => $foods]);
        
        //return view('food');
    }
}
