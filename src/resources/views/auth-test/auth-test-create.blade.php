<div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <p>登録ボタンを表示し、ログインしていなかったらguestモードです、ログインしていたらユーザー情報を表示します</p>
    <p>inputに入力された値で新規ユーザーを作成し、セッション経由でname,email,passwordを表示します</p>
    <form action="{{route('auth-test-create')}}" method="post" >
        @csrf
        <div>
            <label for="name">name</label>
            <input id="name" type="name" name="name" required>
        </div>
        
        <div>
            <label for="email">email</label>
            <input id="email" type="email" name="email" required>
        </div>
        
        <div>
            <label for="password">password</label>
            <input id="password" type="password" name="password" required>
            <button type="submit">登録</button> 
        </div>
       
    </form>

    @if(session('message'))
        {{session('message')}}
    @endif
    @if(isset($message))
        {{$message}}
    @endif
</div>
