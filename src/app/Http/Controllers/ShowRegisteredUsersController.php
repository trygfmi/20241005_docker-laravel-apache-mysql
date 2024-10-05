<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class ShowRegisteredUsersController extends Controller
{
    public function index(Request $request)
    {
        $user = User::all();

        return view('showRegisteredUsers', ['users' => $user]);
    }

    public function deleteUser(Request $request)
    {
        // フォームから受け取ったnameを取得
        $name = $request->input('test');

        // nameが一致するユーザーを削除
        //$deletedCount = User::where('name', $name)->delete();
        $deletedCount = 0;

        // 削除結果に応じたメッセージをセッションに保存
        if ($deletedCount > 0) {
            return redirect()->back()->with('status', $name . ' user deleted successfully');
        } else {
            //return redirect()->back()->with('status', 'No user found with that name');
            return redirect()->back()->with('status', $name . 'が入力されました');
        }
    }
}
