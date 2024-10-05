<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestController extends Controller
{
    //
    public function showReadFromHandler(Request $request){
        dd(redirect()->back()->withInput());
        // dd($request->server());
        // dd($request->segments());
        // dd(new \ReflectionMethod('App\Http\Controllers\Test\TestController::showReadFromHandler'));
        $message = $request->session()->getName();
        // $message = $request->server();
        // return view('test.show-read-from-handler', ['message' => 'connection ok']);
        return view('test.show-read-from-handler', ['message' => $message]);
        // return view('test.show-read-from-handler', ['message' => $message['HTTP_HOST']]);
    }
}
