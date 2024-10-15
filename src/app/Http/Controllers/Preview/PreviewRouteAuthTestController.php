<?php

namespace App\Http\Controllers\Preview;

use App\Models\Preview\PreviewRouteAuthTest;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PreviewRouteAuthTestController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function createIndex(){
        return view('preview.create-auth-test-preview-top');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $object = PreviewRouteAuthTest::create([
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
    public function show(PreviewRouteAuthTest $previewRouteAuthTest)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviewRouteAuthTest $previewRouteAuthTest)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreviewRouteAuthTest $previewRouteAuthTest)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreviewRouteAuthTest $previewRouteAuthTest)
    {
        //
    }
}
