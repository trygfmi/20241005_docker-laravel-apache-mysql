<?php

use Illuminate\Support\Facades\Route;



use App\Http\Controllers\Ajax\HelloAjaxController;
// ボタンを押したら、ImportOwnPokemonモデルの全データを配列形式のjsonで非同期に受け取る画面を表示します
Route::get('/index-ajax-hello', function () {
    return view('ajax.index-ajax-hello');
});
// ImportOwnPokemonモデルの全データを配列形式のjsonでmessage変数を通して渡し、画面に非同期で表示します
Route::get('/ajax-hello', [HelloAjaxController::class, 'helloAjax']);



use App\Http\Controllers\Ajax\ForeignIdPokemonController;
// ForeignIdPokemonモデルにインポートするcsvファイルをアップロードする画面を表示します
Route::get('import-foreign-id-pokemon', [ForeignIdPokemonController::class, 'index']);
// ForeignIdPokemonImportを使用してForeignIdPokemonモデルにcsvファイルの内容をインポートして、message変数を通して画面にステータスを表示します
// インポートするcsvファイルのmain_skill_idがmain_skillsテーブルに存在するidだったらインポートできます
Route::post('import-foreign-id-pokemon', [ForeignIdPokemonController::class, 'import'])->name('import-foreign-id-pokemon');
Route::get('show-foreign-id-pokemon', [ForeignIdPokemonController::class, 'show']);



use App\Http\Controllers\PokemonSleep\SearchNutController;
Route::get('ajax-import-foreign-id-pokemon', [SearchNutController::class, 'getJson']);