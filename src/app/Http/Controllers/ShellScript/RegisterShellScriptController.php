<?php

namespace App\Http\Controllers\ShellScript;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

use App\Models\ShellScript\RegisterShellScript;


class RegisterShellScriptController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('shell-script.register-shell-script');
    }

    public function register(Request $request){
        $createObject = RegisterShellScript::create([
            "shell_script_file_name"=>$request->shell_script_file_name,
            "argument"=>$request->argument,
            "shell_script_code"=>$request->shell_script_code,
            "execute_example"=>$request->execute_example,
            "prepare_shell_script_code"=>$request->prepare_shell_script_code,
            "preapare_execute_example"=>$request->prepare_execute_example,
        ]);

        $createObject->save();


        return redirect()->back()->with('message', $createObject);
    }
}
