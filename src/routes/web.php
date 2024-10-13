<?php

/*
app()->bind('myName', function(){
    return 'John Doe';
});
$user = app()->make('myName');
dd($user);
*/
/*
app()->bind('myclass', function(){
	$slack = new \App\serviceContainerTest\Slack();
	return new \App\serviceContainerTest\MyClass($slack);
});
*/
/*
app()->bind('myclass', \App\serviceContainerTest\MyClass::class);
// app()->bind(\App\serviceContainerTest\Message::class, \App\serviceContainerTest\Mail::class);
app()->bind(\App\serviceContainerTest\Message::class, \App\serviceContainerTest\Slack::class);
$myClass = app()->make('myclass');
$myClass->run();
*/
/*
app()->bind('myclass', \App\serviceContainerTest\MyClass::class);
$myClass = app()->make('myclass');
$myClass2 = app()->make('myclass');
dd($myClass,$myClass2);
*/
/*
app()->singleton('myclass', \App\serviceContainerTest\MyClass::class);
$myClass = app()->make('myclass');
$myClass2 = app()->make('myclass');
dd($myClass,$myClass2);
*/

/*
//(1)インスタンス化
$encrypt = app()->make('encrypter');
//(2)$password変数には、eyJpdiI6IitLcEpqM0....が入る
$password = $encrypt->encrypt('password');
//(3)$password変数の文字列を復号化、結果暗号化する前のpasswordが表示
// dd($password);
dd($encrypt->decrypt($password));
*/

/*
$name = app()->make('myName');
dd($name);
*/

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;



Route::get('preview-top', function(){
    return view('preview-top');
})->name('preview-top');
Route::get('web-preview-top', function(){
    return view('web-preview-top');
})->name('web-preview-top');



Route::get('/', function () {
    return view('welcome');
})->name('welcome');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});



require __DIR__.'/auth.php';



use App\Http\Controllers\ShowRegisteredUsersController;
// Userモデルで全レコードを取得後、users変数を通してデータを画面に表示します
Route::get('/show-users', [ShowRegisteredUsersController::class, 'index'])
->name('show-users');
// Route::post('/delete-user', [ShowRegisteredUsersController::class, 'deleteUser'])->name('delete-example');
// inputでnameがtestの値を取得し、testがUserモデルに紐づくnameカラムの値に一致する場合削除して、セッションでstatus変数を通して画面にメッセージを表示する
Route::post('/show-users', [ShowRegisteredUsersController::class, 'deleteUser'])
->name('delete-users');



use App\Http\Controllers\CreateTableController;
// createTableビューを返します
Route::get('/create-table', [CreateTableController::class, 'index'])
->name('create-table');
/*
use Illuminate\Http\Request;
Route::post('/create-table', function(Request $request){
    $table = $request->input('table');
    return view('success', ['table' => $table]);
});
*/
// inputでnameがtableNameの値を取得し、tableName変数を通してsuccessビューでデータを画面に表示します
Route::post('/create-table', [CreateTableController::class, 'create']);
// successビューを返します
Route::get('/success', function(){
    return view('success');
})->name('success');



require __DIR__.'/pokemonSleep.php';


require __DIR__.'/importCsv.php';



require __DIR__.'/authTest.php';



// use App\Http\Controllers\MailController;
// Googleのgmail apiで実装しようとして挫折
// Route::get('/send-email', [MailController::class, 'send']);
// Route::get('/send-email-log', [MailController::class, 'sendLog']);



// unixタイムスタンプを表示します
Route::get('show-timestamp', function(){
    return view('show-timestamp');
})->name('show-timestamp');




// use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Schema;
// Illuminate\Support\Facadesに属するクラスの、実際に定義されているクラスを表示します
Route::get('show-facade-class-name', function(){
    // return view('show-facade-class-name', ['message' => App::getFacadeRoot()]);
    return view('show-facade-class-name', ['message' => DB::getFacadeRoot()]);
})->name('show-facade-class-name');



require __DIR__.'/test.php';



require __DIR__."/ajax.php";



