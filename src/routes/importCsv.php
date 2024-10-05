<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ImportCsv\UserController;
use App\Http\Controllers\ImportCsv\MainSkillTestController;
use App\Http\Controllers\ImportCsv\SubSkillImportTestController;
use App\Http\Controllers\ImportCsv\ImportCsvController;
use App\Http\Controllers\ImportCsv\ImportCsvSubController;
use App\Http\Controllers\ImportCsv\importCsvTestController;
use App\Http\Controllers\ImportCsv\ImportPokemonNameController;



// import-csvフォルダのimport-usersを表示します
Route::get('/import-users', function(){
    return view('import-csv.import-users');
});
// inputでアップロードしたcsvファイルから、UserImportクラスで値を抽出して、作成したテーブルにカラム名を指定して保存する
Route::post('/import-users', [UserController::class, 'import'])->name('import.users');



// import-csvフォルダのmain-skill-testファイルを表示します
Route::get('/main-skill-test', function(){
    return view('import-csv.main-skill-test');
});
// inputでアップロードしたファイルから、MainSkillTestImportクラスで値を抽出して、作成したテーブルにカラム名を指定して保存
Route::post('/main-skill-test', [MainSkillTestController::class, 'import'])->name('main-skill-test');



// sub-skillフォルダのsub-skill-import-testファイルを表示します
Route::get('/sub-skill-import-test', function(){
    return view('import-csv.sub-skill-import-test');
});
// inputでアップロードしたcsvファイルから、SubSkillImportTestImportクラスで定義した値を取得し、作成したテーブルにカラム名を指定して保存する
Route::post('/sub-skill-import-test', [SubSkillImportTestController::class, 'import'])->name('sub-skill-import-test');

// SubSkillImportTestモデルを使用して全レコードを取得後、skills変数として渡し、画面に表示する
Route::get('index-sub-skill-import-test', [SubSkillImportTestController::class, 'index']);






use App\Http\Middleware\Test\MiddlewareTest;
// import-csvフォルダのimport-csvファイルを表示します
Route::get('/import-csv', function(){
    return view('import-csv.import-csv');
});
// inputでアップロードしたcsvファイルから、ImportCsvImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する
Route::post('/import-csv', [ImportCsvController::class, 'import'])->name('import-csv');
// なぜかミドルウェアが2回実行される
// Route::get('/show-import-csv', [ImportCsvController::class, 'show'])->middleware(MiddlewareTest::class);
// middlewareのtestを実施後、ImportCsvモデルで全レコードを取得後、main_skills変数を通して画面に表示する
Route::get('/show-import-csv', [ImportCsvController::class, 'show'])->middleware('test');



// import-csvフォルダのimport-csv-subファイルを表示します
Route::get('/import-csv-sub', function(){
    return view('import-csv.import-csv-sub');
});
// inputでアップロードしたcsvファイルから、ImportSubTestImportクラスで定義した値を取得して、作成したテーブルのカラム名で保存する
Route::post('/import-csv-sub', [ImportCsvSubController::class, 'import'])->name('import-csv-sub');
// ImportCsvSubで全レコードを取得後、sub_skills変数を通してshow-import-csv-subに表示する
Route::get('/show-import-csv-sub', [ImportCsvSubController::class, 'show']);



// import-csvフォルダのimport-csv-testファイルを表示します
Route::get('/import-csv-test', function(){
    return view('import-csv.import-csv-test');
});
// inputでアップロードしたcsvファイルから、ImportCsvTestImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する
Route::post('/import-csv-test', [importCsvTestController::class, 'import'])->name('import-csv-test');
// ImportCsvTestで全レコードを取得後、names変数を通して画面に表示します
Route::get('/show-import-csv-test', [importCsvTestController::class, 'show']);



// import-csvフォルダのimport-pokemon-nameファイルを表示します
Route::get('/import-pokemon-name', function(){
    return view('import-csv.import-pokemon-name');
});
// inputでアップロードしたcsvファイルから、ImportPokemonNameImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する
Route::post('/import-pokemon-name', [ImportPokemonNameController::class, 'import'])->name('import-pokemon-name');
// ImportPokemonNameで全レコードを取得後、pokemon_names変数を通して画面に表示する
Route::get('/show-import-pokemon-name', [ImportPokemonNameController::class, 'show']);