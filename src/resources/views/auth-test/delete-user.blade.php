<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    <p>削除ボタンと、ログインしていなかったらguestモードです、ログインしていたらユーザー情報を表示します</p>
    <p>ログインしているユーザーを取得して削除し、セッション経由でユーザーを削除しましたと表示します</p>
    <form action="{{route('delete-user')}}" method="post" >
        @csrf
        <button type="submit">削除</button>
    </form>

    @if(session('message'))
        {{session('message')}}
    @endif
    @if(isset($message))
        {{$message}}
    @endif
</div>
