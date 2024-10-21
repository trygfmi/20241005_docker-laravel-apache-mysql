<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\PokemonSleep\OwnPokemonComplete;



use App\Models\PokemonSleep\OwnPokemonCompleteSeeders;



use App\Models\PokemonSleep\Personality;



use App\Models\MainSkill;



use App\Models\PokemonSleep\Foodlv60;



use App\Models\Preview\PreviewRouteTest;



use App\Models\ShellScript\RegisterShellScript;



class Test2Controller extends Controller
{
    //

    public function test2index(){
        return view('test.test2');
    }

    public function test2create(Request $request){
        return "hello";
    }

    public function test3index(){
        return view('test.test3');
    }

    public function test3create(Request $request){
        return "hello";
    }

    public function testshow2Show(){
        $result = RegisterShellScript::all();

        return view('test.test-show2', ['message'=>$result]);
    }

    public function testshow3Show(){
        $result = PreviewRouteTest::all();

        return view('test.test-show3', ['message'=>$result]);
    }

    public function testshow4Show(){
        $result = PreviewRouteTest::all();

        return view('test.test-show4', ['message'=>$result]);
    }

    public function testshow5Show(){
        $result = Foodlv60::all();

        return view('test.test-show5', ['message'=>$result]);
    }

    public function testshow6Show(){
        $result = MainSkill::all();

        return view('test.test-show6', ['message'=>$result]);
    }

    public function test6showShow(){
        $result = Personality::all();

        return view('test.test6-show', ['message'=>$result]);
    }

    public function testshow7Show(){
        $result = Personality::all();

        return view('test.test-show7', ['message'=>$result]);
    }

    public function testshow8Show(){
        $result = OwnPokemonCompleteSeeders::all();

        return view('test.test-show8', ['message'=>$result]);
    }

    public function testshow9Show(){
        $result = OwnPokemonComplete::all();

        return view('test.test-show9', ['message'=>$result]);
    }

    public function testshow10Show(){
        $result = OwnPokemonComplete::all();
        
        return view('test.test-show10', ['message'=>$result]);
    }

    public function testshow11Show(){
        $result = OwnPokemonComplete::all();

        return view('test.test-show11', ['message'=>$result]);
    }
}
