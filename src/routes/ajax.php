<?php

use Illuminate\Support\Facades\Route;



use App\Models\Preview\PreviewRouteAjax;
Route::get('ajax-preview-top',function(){
    $route_ajaxes = PreviewRouteAjax::all();
    return view('ajax.ajax-preview-top', ['route_ajaxes'=>$route_ajaxes]);
})->name('ajax-preview-top');



use App\Http\Controllers\Ajax\HelloAjaxController;
// ボタンを押したら、ImportOwnPokemonモデルの全データを配列形式のjsonで非同期に受け取る画面を表示します
Route::get('/index-ajax-hello', function () {
    return view('ajax.index-ajax-hello');
})->name('index-ajax-hello');
// ImportOwnPokemonモデルの全データを配列形式のjsonでmessage変数を通して渡し、画面に非同期で表示します
Route::get('/ajax-hello', [HelloAjaxController::class, 'helloAjax'])->name('ajax-hello');



use App\Http\Controllers\Ajax\ForeignIdPokemonController;
// ForeignIdPokemonモデルにインポートするcsvファイルをアップロードする画面を表示します
Route::get('import-foreign-id-pokemon', [ForeignIdPokemonController::class, 'index'])->name('index-import-foreign-id-pokemon');
// ForeignIdPokemonImportを使用してForeignIdPokemonモデルにcsvファイルの内容をインポートして、message変数を通して画面にステータスを表示します
// インポートするcsvファイルのmain_skill_idがmain_skillsテーブルに存在するidだったらインポートできます
Route::post('import-foreign-id-pokemon', [ForeignIdPokemonController::class, 'import'])->name('import-foreign-id-pokemon');
Route::get('show-foreign-id-pokemon', [ForeignIdPokemonController::class, 'show'])->name('show-foreign-id-pokemon');



use App\Http\Controllers\PokemonSleep\SearchNutController;
Route::get('ajax-import-foreign-id-pokemon', [SearchNutController::class, 'getJson'])->name('ajax-import-foreign-id-pokemon');