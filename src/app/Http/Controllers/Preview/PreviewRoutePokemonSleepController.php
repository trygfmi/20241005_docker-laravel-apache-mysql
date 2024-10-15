<?php

namespace App\Http\Controllers\Preview;

use App\Models\Preview\PreviewRoutePokemonSleep;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PreviewRoutePokemonSleepController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function createIndex(){
        return view('preview.create-pokemon-sleep-preview-top');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $object = PreviewRoutePokemonSleep::create([
            'view_file_name'=>$request->view_file_name,
            'route_url'=>$request->route_url,
            'controller'=>$request->controller,
            'get_method'=>$request->get_method,
            'get_helper_name'=>$request->get_helper_name,
            'middleware'=>$request->middleware,
            'post_method'=>$request->post_method,
            'post_helper_name'=>$request->post_helper_name,
            'model'=>$request->model,
            'table_name'=>$request->table_name,
        ]);

        $object->save();


        return redirect()->back()->with('message', "success");
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
    public function show(PreviewRoutePokemonSleep $previewRoutePokemonSleep)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviewRoutePokemonSleep $previewRoutePokemonSleep)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreviewRoutePokemonSleep $previewRoutePokemonSleep)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreviewRoutePokemonSleep $previewRoutePokemonSleep)
    {
        //
    }
}
