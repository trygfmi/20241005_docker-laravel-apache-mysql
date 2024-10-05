<?php

namespace App\Http\Controllers\AuthTest;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;

class AuthTestController extends Controller
{
    //
    public function index(){
        // $user = User::find(4);
        // return view('auth-test.auth-test',  ['user' => $user]);
        return view('auth-test.auth-test');
    }

    public function authTest(){
        $user = User::find(5);

        // return redirect()->back()->withInput();
        // Auth::login($user);

        // セッションにデータが保存される
        // return redirect()->back()->with(['user' => $user]);
        // 同じページに遷移後、ログインしているユーザのusersテーブルに保存されている値ををすべて表示する
        // return view('auth-test.auth-test', ['user' => Auth::user()]);
        // urlに?user=$userの形で生成される
        // return redirect()->route('auth-test', ['user' => $user]);
        // 同じページに遷移後、ログインしているユーザのidを表示させる
        // return view('auth-test.auth-test', ['user' => Auth::id()]);
        // ユーザーインスタンスからメールアドレスを取り出す
        return view('auth-test.auth-test', ['user' => $user->email]);
    }

    public function authLogin(Request $request){
        $credentials = $request->only('name', 'password');

        if(Auth::attempt($credentials)){
            return redirect()->back()->with(['user' => $request->name.'でログイン中'.$request->email]);
        }

        return redirect()->back()->with(['user' => 'うまくいっていないです']);
    }

    public function authLoginNameEmailIndex(Request $request){
        if(Auth::guest()){
            return view('auth-test.auth-test-name-email', ['message' => 'guestモードです']);
        }else{
            return view('auth-test.auth-test-name-email', ['message' => Auth::user()]);
        }
        
    }

    public function authLoginNameEmail(Request $request){
        $validator = Validator::make($request->all(), [
            'name' => 'exists:users',
            'email' => 'exists:users',
        ]);
        if ($validator->fails()) {
            // バリデーションが失敗した場合、エラーと共に追加データを送信
            return redirect()->back()
                             ->withErrors($validator)
                             ->with('message', 'ログインできませんでした');
        }
        /*
        $request->validate([
            'name' => 'exists:users',
            'email' => 'exists:users',
        ]);
        */
        $name = $request->name;
        $email = $request->email;

        $user = User::where('name', $name)->where('email', $email)->first();

        // $arrayList = $request->only(['name', 'email']);
        $arrayList = $request->toArray();
        if($user){
            Auth::login($user);
            // dd(session()->all());
            return redirect()->back()->with('message', $name.':'.$email.":".get_class($user));
        }

        // return redirect()->back()->with('message', 'うまくいっていません'.":".get_class($request));
        // return redirect()->back()->with('message', 'うまくいっていません'.":".$request->format());
        return redirect()->back()->with('message', $arrayList['name'].$arrayList['email']);
    }




    public function editUserInformationIndex(){
        $user = Auth::user();

        return view('auth-test.edit-user-information', ['user' => $user]);
    }

    public function editUserInformationUpdate(Request $request){
        $user = User::find(3);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->save();

        return view('auth-test.edit-user-information', ['user' => $user, 'message' => "saveしました"]);
    }

    public function deleteUserIndex(){
        if(Auth::guest()){
            return view('auth-test.delete-user', ['message' => 'guestモードです']);
        }else{
            return view('auth-test.delete-user', ['message' => Auth::user()]);
        }
    }

    public function deleteUser(){
        $user = Auth::user();

        // Auth::logout();
        $user->delete();

        return redirect()->back()->with('message', $user.'を削除しました');
    }

    public function authTestCreateIndex(){
        if(Auth::guest()){
            return view('auth-test.auth-test-create', ['message' => 'guestモードです']);
        }else{
            return view('auth-test.auth-test-create', ['message' => Auth::user()]);
        }
        
    }

    public function authTestCreate(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;

        $user = User::create([
            'name' => $name,
            'email' => $email,
            'password' => $password,
        ]);

        $user->save();

        return redirect()->back()->with('message', $name.$email.$password."で登録しました");
    }
}
