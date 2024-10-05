<div>
    <!-- Simplicity is the ultimate sophistication. - Leonardo da Vinci -->
    <p>nameとpasswordを受け取ってログインするボタンが表示されます</p>
    <p>ログインボタンを押すと、idが5のユーザーのemailカラムを$user変数で返します</p>
    {{-- <form action="{{route('auth-login')}}" method="post"> --}}
    <form action="{{route('auth-test')}}" method="post">
        @csrf
        <div>
            <label for="name">name</label>
            {{-- <x-text-input name="name" type="text" :value="old('name', $user->name)" /> --}}
            {{-- <x-text-input name="name" type="text" :value="old('name', 'bbb')" /> --}}
            {{-- <input name="name" type="text" value="{{old('name', $user->name)}}" required > --}}
            {{-- <x-text-input name="name" type="text" :value="old('name', $user->name)" required /> --}}
            <input id="name" name="name" type="text" value="{{old('name')}}" required >
        </div>

        <div>
        {{-- <input name="email" type="email" value="{{old('email', $user->email)}}" required > --}}
        </div>
        
        <div>
            <label for="password">password</label>
            {{-- <input name="password" type="password" value="{{old('password', $user->password)}}" > --}}
            <input id="password" name="password" type="password" value="{{old('password')}}" >
            <button type="submit">ログイン</button>
        </div>
        
    </form>

    @if(isset($user))
        {{$user}}
    @endif
    {{-- @if(session('user')) --}}
        {{-- {{session('user')}} --}}
    {{-- @endif --}}
    {{-- @if(request('user')) --}}
        {{-- {{request('user')}} --}}
    {{-- @endif --}}
</div>
