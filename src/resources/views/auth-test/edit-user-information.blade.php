<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <p>ログインしているユーザの情報を得て、inputに初期設定します　ログインしていなかったらエラーが出ます</p>
    <p>idが3のユーザーインスタンスを取得して、inputに入力されたnameとemailをセットして保存し、userとmessage変数を返します</p>
    <form action="{{route('edit-user-information')}}" method="post">
        @csrf
        <div>
            <label for="name">name</label>
            <input id="name" type="text" name="name" value="{{$user->name}}" >
        </div>
        

        <div>
            <label for="email">email</label>
            <input id="email" type="email" name="email" value="{{$user->email}}" >
        </div>
        

        <div>
            <label for="password">password</label>
            <input id="password" type="text" name="password" value="{{$user->password}}" >
            <button type="submit">変更</button>
        </div>
        
    </form>

    @if(isset($user))
        {{$user}}
    @endif
    @if(isset($message))
        {{$message}}
    @endif
</div>
