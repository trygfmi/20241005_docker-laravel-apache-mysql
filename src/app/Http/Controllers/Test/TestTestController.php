<?php

namespace App\Http\Controllers\Test;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TestTestController extends Controller
{





    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('test.test');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('pokemon-sleep.pokemon-sleep-test');
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
    public function show()
    {
        //
        return view('test.testtest');
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

    public function elseTest(){
        return view('test.else-test');
    }

    public function elseTest2(){
        return view('test.else-test2');
    }

    public function insertInputElementTest(){
        return view('test.insert-input-element-test');
    }

    public function createPost(){
        return "hello";
    }

    public function create1(){
        return view('pokemon-sleep.pokemon-sleep-test1');
    }

    public function createPost1(Request $request){
        return "hello";
    }

    public function create2(){
        return view('pokemon-sleep.pokemon-sleep-test2');
    }

    public function createPost2(Request $request){
        return "hello";
    }
}
