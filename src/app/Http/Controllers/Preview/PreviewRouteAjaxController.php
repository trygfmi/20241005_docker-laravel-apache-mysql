<?php

namespace App\Http\Controllers\Preview;

use App\Models\Preview\PreviewRouteAjax;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;


class PreviewRouteAjaxController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    public function createIndex(){
        return view('preview.create-ajax-preview-top');
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create(Request $request)
    {
        //
        $object = PreviewRouteAjax::create([
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
    public function show(PreviewRouteAjax $previewRouteAjax)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(PreviewRouteAjax $previewRouteAjax)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, PreviewRouteAjax $previewRouteAjax)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(PreviewRouteAjax $previewRouteAjax)
    {
        //
    }
}
