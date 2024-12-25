<?php

use Illuminate\Support\Facades\Route;

// pokemon_sleep ------------------------------------------------
use App\Models\Preview\PreviewRoutePokemonSleep;
Route::get('pokemon-sleep-preview-top', function(){
    $route_pokemon_sleeps = PreviewRoutePokemonSleep::all();
    return view('pokemon-sleep.pokemon-sleep-preview-top', ['route_pokemon_sleeps'=>$route_pokemon_sleeps]);
})->name('pokemon-sleep-preview-top');



use App\Http\Controllers\Preview\PreviewRoutePokemonSleepController;
Route::get('create-pokemon-sleep-preview-top', [PreviewRoutePokemonSleepController::class, 'createIndex'])
->name('create-pokemon-sleep-preview-top-index');
Route::post('create-pokemon-sleep-preview-top', [PreviewRoutePokemonSleepController::class, 'create'])
->name('create-pokemon-sleep-preview-top');



use App\Http\Controllers\PokemonSleep\FoodController;
// Foodモデルで全レコードを取得後、foods変数を通して画面に表示
Route::get('/foods', [FoodController::class, 'index'])->name('preview-foods');
// アクセスしたら、Foodモデルに紐づいているテーブルのidが28番目のnameをbananaにし、全レコードを表示する
Route::get('/foods-save', [FoodController::class, 'save'])->name('foods-save');



use App\Http\Controllers\PokemonSleep\RegisterFoodController;
// pokemon-sleepフォルダのregister-foodを表示します
Route::get('/register-food', function(){
    return view('pokemon-sleep.register-food');
})->name('preview-register-food');
// Route::post('/register-food', [RegisterFoodController::class, 'insert_test'])->name('insert-food-test');
// inputで入力されたnameが存在したら、既にnameは存在していますと表示し、存在しなかったらFoodに紐づくテーブルに保存し、セッション経由でfood変数とenergy変数を画面に表示します
Route::post('/register-food', [RegisterFoodController::class, 'insert'])->name('insert-food');




use App\Http\Controllers\PokemonSleep\MainSkillController;
// pokemon-sleepフォルダのregister-main-skillファイルを表示します
Route::get('/register-main-skill', function(){
    return view('pokemon-sleep.register-main-skill');
})->name('preview-register-main-skill');
// MainSkillモデルに紐づく全レコードを取得後、main_skills変数を通してデータを画面に表示します
Route::get('/show-registered-main-skills', [MainSkillController::class, 'show'])
->name('show-registered-main-skills');
// inputに入力した値がMainSkillモデルに存在していたら、既に登録されていますと表示し、されていなかったら、MainSkillモデルに紐づくテーブルに保存し、セッション経由でmain_skill変数を画面に表示する
Route::post('/register-main-skill', [MainSkillController::class, 'store'])
->name('register-main-skill');



use App\Http\Controllers\PokemonSleep\SubSkillController;
// pokemon-sleepフォルダのregister-sub-skillファイルを表示します
Route::get('/register-sub-skill', [SubSkillController::class, 'index'])
->name('preview-register-sub-skill');
// SubSkillモデルに紐づく全レコードを取得後、sub_skills変数を通してデータを画面に表示します
Route::get('/show-registered-sub-skills', [SubSkillController::class, 'show'])
->name('show-registered-sub-skills');
// inputに入力した値がSubSkillモデルに存在していたら、既に登録されていますと表示し、されていなかったら、SubSkillモデルに紐づくテーブルに保存し、セッション経由でmessage変数のデータを画面に表示します
Route::post('/register-sub-skill', [SubSkillController::class, 'store'])
->name('register-sub-skill');
// pokemon_sleep --------------------------------------------------



use App\Http\Controllers\PokemonSleep\SearchNutController;
// 検索ワードを入力するinputと、検索buttonを表示します
Route::get('search-nut', [SearchNutController::class, 'index'])
->name('preview-search-nut');
// nputに入力した値で、SubSkillImportTestモデルのsub_skillカラムを検索し、結果をinput変数を通してデータを画面に表示する
Route::post('search-nut', [SearchNutController::class, 'search'])
->name('search-nut');



use App\Http\Controllers\PokemonSleep\ImportOwnPokemonController;
Route::get('import-own-pokemon', function(){
    return view('pokemon-sleep.import-own-pokemon');
})->name('preview-import-own-pokemon');
// Importクラスで$row[]配列に指定する文字列は日本語だとうまくいかない
Route::post('import-own-pokemon', [ImportOwnPokemonController::class, 'import'])
->name('import-own-pokemon');
// ImportOwnPokemonモデルに属するデータを全て取得して、ownPokemon変数を通してデータを画面に表示します
Route::get('show-import-own-pokemon', [ImportOwnPokemonController::class, 'show'])
->name('show-import-own-pokemon');



use App\Http\Controllers\PokemonSleep\ChoicePokemonController;
Route::get('choice-pokemon', [ChoicePokemonController::class, 'index'])
->name('choice-pokemon');
Route::post('choice-pokemon', [ChoicePokemonController::class, 'store'])
->name('save-choice-pokemon');
// get-pokemon-template.jsのgetPokemonTemplateメソッド ajax
Route::get('get-pokemon-template-via-ajax', [ChoicePokemonController::class, 'getPokemonTemplate']);



use App\Http\Controllers\PokemonSleep\OwnPokemonCompleteController;
Route::get('/show-own-pokemon-complete', [OwnPokemonCompleteController::class, 'index'])
->name('show-own-pokemon-complete');
Route::post('/show-own-pokemon-complete', [OwnPokemonCompleteController::class, 'delete'])
->name('delete-own-pokemon-complete');
Route::get('/search-own-pokemon-complete', [OwnPokemonCompleteController::class, 'searchIndex'])
->name('search-own-pokemon-complete');
Route::post('/search-own-pokemon-complete', [OwnPokemonCompleteController::class, 'search'])
->name('search');
Route::get('/get-json-own-pokemon-complete', [OwnPokemonCompleteController::class, 'getJson']);



use App\Http\Controllers\PokemonSleep\BuildOwnPokemonCompleteSeederController;
// 現在のown_pokemon_completesテーブルに保存されている全レコードをseederで追加できる状態の文字列を出力
Route::get('build-own-pokemon-complete-seeder', [BuildOwnPokemonCompleteSeederController::class, 'buildSeeder'])
->name('build-own-pokemon-complete-seeder');
Route::get('show-own-pokemon-complete-seeder', [BuildOwnPokemonCompleteSeederController::class, 'show'])
->name('show-own-pokemon-complete-seeder');



Route::get('own-pokemon-complete-edit-pokemon-sleep', [OwnPokemonCompleteController::class, 'editIndex'])
->name('own-pokemon-complete-edit-pokemon-sleep-editIndex');



Route::post('own-pokemon-complete-edit-pokemon-sleep', [OwnPokemonCompleteController::class, 'edit'])
->name('own-pokemon-complete-edit-pokemon-sleep-edit');



Route::get('own-pokemon-complete-edit2-pokemon-sleep', [OwnPokemonCompleteController::class, 'editIndex2'])
->name('own-pokemon-complete-edit2-pokemon-sleep-editIndex2');



Route::post('own-pokemon-complete-edit2-pokemon-sleep', [OwnPokemonCompleteController::class, 'edit2'])
->name('own-pokemon-complete-edit2-pokemon-sleep-edit2');



