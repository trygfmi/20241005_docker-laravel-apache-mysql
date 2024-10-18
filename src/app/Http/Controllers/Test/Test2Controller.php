<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

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

    public function show(){
        $result = RegisterShellScript::all();

        return view('test.test-show', ['message'=>$result]);
    }
}
