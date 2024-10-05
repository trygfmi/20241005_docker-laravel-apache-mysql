<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <p>csrfトークンと、guestだったらguestモードです、ログインしていたらログインしているユーザー情報を表示します</p>
    <p>nameとemailカラムがusersテーブルにあるか確認して、存在していたらログインして、nameとemail、userのクラスパス、ユーザー情報を表示します</p>
    <form action="{{route('auth-test-name-email')}}" method="post" >
        @csrf
        <input type="text" name="name" required >
        <input type="text" name="email" required >
        <button type="submit">ログイン</button>
    </form>

    @if (session('message'))
        <li>{{session('message')}}</li>
    @endif
    @if (session('_token'))
        <p>csrfトークン:{{session('_token')}}</p>
    @endif
    @if(isset($message))
        {{$message}}
    @endif
    @if ($errors->hasAny(['name','emai']))
        <li>{{$errors->count()}}</li>
        <li>{{var_dump($errors)}}</li>
        <li>{{$errors}}</li>
    @endif
    @if ($errors->any())
        <li>{{$errors->first('name')}}</li>
    @endif
    @if ($errors->any())
        @foreach($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
    @endif
</div>
