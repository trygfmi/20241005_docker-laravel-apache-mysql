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



Route::get('testtest', [TestTestController::class, 'show'])
->name('testtest-show');



Route::get('else-test', [TestTestController::class, 'elseTest'])
->name('else-test-elseTest');



Route::get('else-test2', [TestTestController::class, 'elseTest2'])
->name('else-test2-elseTest2');



Route::get('insert-input-element-test', [TestTestController::class, 'insertInputElementTest'])
->name('insert-input-element-test-insertInputElementTest');



Route::get('pokemon-sleep-test', [TestTestController::class, 'create'])
->name('pokemon-sleep-test-create');



Route::post('pokemon-sleep-test', [TestTestController::class, 'createPost'])
->name('pokemon-sleep-test-createPost');



use App\Http\Controllers\Test\StartCreatingViewController;
Route::get('start-creating-view', [StartCreatingViewController::class, 'index'])
->name('start-creating-view-index');



Route::post('start-creating-view', [StartCreatingViewController::class, 'create'])
->name('start-creating-view-create');



Route::get('pokemon-sleep-test1', [TestTestController::class, 'create1'])
->name('pokemon-sleep-test1-create1');



Route::post('pokemon-sleep-test1', [TestTestController::class, 'createPost1'])
->name('pokemon-sleep-test1-createPost1');



Route::get('pokemon-sleep-test2', [TestTestController::class, 'create2'])
->name('pokemon-sleep-test2-create2');



Route::post('pokemon-sleep-test2', [TestTestController::class, 'createPost2'])
->name('pokemon-sleep-test2-createPost2');



use App\Http\Controllers\Test\Test2Controller;
Route::get('test2', [Test2Controller::class, 'test2index'])
->name('test2-test2index');



Route::post('test2', [Test2Controller::class, 'test2create'])
->name('test2-test2create');



Route::get('test3', [Test2Controller::class, 'test3index'])
->name('test3-test3index');



Route::post('test3', [Test2Controller::class, 'test3create'])
->name('test3-test3create');



Route::get('test-show2', [Test2Controller::class, 'testshow2Show'])
->name('test-show2-show');



Route::get('test-show3', [Test2Controller::class, 'testshow3Show'])
->name('test-show3-show');



Route::get('test-show4', [Test2Controller::class, 'testshow4Show'])
->name('test-show4-show');



Route::get('test-show5', [Test2Controller::class, 'testshow5Show'])
->name('test-show5-show');



Route::get('test-show6', [Test2Controller::class, 'testshow6Show'])
->name('test-show6-show');



Route::get('test6-show', [Test2Controller::class, 'test6showShow'])
->name('test6-show-show');



Route::get('test-show7', [Test2Controller::class, 'testshow7Show'])
->name('test-show7-show');



Route::get('test-show8', [Test2Controller::class, 'testshow8Show'])
->name('test-show8-show');



Route::get('test-show9', [Test2Controller::class, 'testshow9Show'])
->name('test-show9-show');



Route::get('test-show10', [Test2Controller::class, 'testshow10Show'])
->name('test-show10-show');



Route::get('test-show11', [Test2Controller::class, 'testshow11Show'])
->name('test-show11-show');



