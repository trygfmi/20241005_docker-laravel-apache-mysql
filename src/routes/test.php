<?php

use Illuminate\Support\Facades\Route;


use App\Models\Preview\PreviewRouteTest;
Route::get('test-preview-top', function(){
    $route_tests = PreviewRouteTest::all();
    return view('test.test-preview-top', ['route_tests'=>$route_tests]);
})->name('test-preview-top');



use App\Http\Controllers\Preview\PreviewRouteTestController;
Route::get('create-test-preview-top', [PreviewRouteTestController::class, 'createIndex'])
->name('create-test-preview-top-index');
Route::post('create-test-preview-top', [PreviewRouteTestController::class, 'create'])
->name('create-test-preview-top');



use App\Http\Controllers\Test\TestController;
// dd(dump and die)を使用して、クラスパスやリクエスト、レスポンスの内容を表示します
Route::get('show-read-from-handler', [TestController::class, 'showReadFromHandler'])
->name('show-read-from-handler');



Route::get('custom-dialog', function(){
    return view('test.custom-dialog');
})->name('custom-dialog');
Route::get('custom-alert', function(){
    return view('test.custom-alert');
})->name('custom-alert');
Route::get('await-custom-dialog', function(){
    return view('test.await-custom-dialog');
})->name('await-custom-dialog');



use App\Http\Controllers\Test\TestTestController;
Route::get('test', [TestTestController::class, 'index'])
->name('test-index');



Route::get('pokemon-sleep-test', [TestTestController::class, 'create'])
->name('pokemon-sleep-test-create');



