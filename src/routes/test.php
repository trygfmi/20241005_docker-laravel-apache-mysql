<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Test\TestController;
// dd(dump and die)を使用して、クラスパスやリクエスト、レスポンスの内容を表示します
Route::get('show-read-from-handler', [TestController::class, 'showReadFromHandler']);