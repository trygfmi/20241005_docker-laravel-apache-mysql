<?php

namespace App\Http\Controllers;

use App\Models\CreateTable;
use Illuminate\Http\Request;

class CreateTableController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('createTable');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $tableName = $request->input('tableName');
        return view('success', ['tableName' => $tableName]);
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
    public function show(CreateTable $createTable)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(CreateTable $createTable)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, CreateTable $createTable)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(CreateTable $createTable)
    {
        //
    }
}
