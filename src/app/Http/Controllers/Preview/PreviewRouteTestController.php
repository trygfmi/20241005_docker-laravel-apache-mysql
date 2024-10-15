<?php

namespace App\Http\Controllers\Preview;

use App\Models\Preview\PreviewRouteTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PreviewRouteTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function createIndex(){
        return view('preview.create-test-preview-top');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $object = PreviewRouteTest::create([
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
    public function show(PreviewRouteTest $previewRouteTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviewRouteTest $previewRouteTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreviewRouteTest $previewRouteTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreviewRouteTest $previewRouteTest)
    {
        //
    }
}
