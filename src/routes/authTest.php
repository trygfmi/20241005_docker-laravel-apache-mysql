<?php
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthTest\AuthTestController;



use App\Models\Preview\PreviewRouteAuthTest;
Route::get('auth-test-preview-top', function(){
    $route_auth_tests = PreviewRouteAuthTest::all();
    return view('auth-test.auth-test-preview-top', ['route_auth_tests'=>$route_auth_tests]);
})->name('auth-test-preview-top');



// nameとpasswordを受け取ってログインするボタンが表示されます
Route::get('/auth-test', [AuthTestController::class, 'index'])
->name('preview-auth-test');
// idが5のユーザーのemailカラムを$user変数で返します
Route::post('/auth-test', [AuthTestController::class, 'authTest'])->name('auth-test');
// Route::post('/auth-test', [AuthTestController::class, 'authLogin'])->name('auth-login');


// csrfトークンと、guestだったらguestモードです、ログインしていたらログインしているユーザー情報を表示します
Route::get('/auth-test-name-email', [AuthTestController::class, 'authLoginNameEmailIndex'])->name('auth-test-name-email');
// nameとemailカラムがusersテーブルにあるか確認して、存在していたらログインして、nameとemail、userのクラスパス、ユーザー情報を表示します
Route::post('/auth-test-name-email', [AuthTestController::class, 'authLoginNameEmail'])->name('auth-test-name-email');


// ログインしているユーザの情報を得て、inputに初期設定します　ログインしていなかったらエラーが出ます
Route::get('/edit-user-information', [AuthTestController::class, 'editUserInformationIndex'])->name('edit-user-information');
// idが3のユーザーインスタンスを取得して、inputに入力されたnameとemailをセットして保存し、userとmessage変数を返します
Route::post('/edit-user-information', [AuthTestController::class, 'editUserInformationUpdate'])->name('edit-user-information');




// 削除ボタンと、ログインしていなかったらguestモードです、ログインしていたらユーザー情報を表示します
Route::get('delete-user', [AuthTestController::class, 'deleteUserIndex'])->name('delete-user');
// ログインしているユーザーを取得して削除し、セッション経由でユーザーを削除しましたと表示します
Route::post('delete-user', [AuthTestController::class, 'deleteUser'])->name('delete-user');



// 登録ボタンを表示し、ログインしていなかったらguestモードです、ログインしていたらユーザー情報を表示します
Route::get('auth-test-create', [AuthTestController::class, 'authTestCreateIndex'])->name('auth-test-create');
// inputに入力された値で新規ユーザーを作成し、セッション経由でname,email,passwordを表示します
Route::post('auth-test-create', [AuthTestController::class, 'authTestCreate'])->name('auth-test-create');