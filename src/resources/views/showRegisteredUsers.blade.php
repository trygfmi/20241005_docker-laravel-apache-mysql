<x-guest-layout>
    <p>Userモデルで全レコードを取得後、users変数を通してデータを画面に表示します</p>
    <p>inputでnameがtestの値を取得し、testがUserモデルに紐づくnameカラムの値に一致する場合削除して、セッションでstatus変数を通して画面にメッセージを表示する</p>
    <div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
        <p>hello home</p>
    </div>

    <div>
        @foreach ($users as $user)
            <li>{{$user->name}} ({{$user->email}})</li>
        @endforeach
    </div>

    <h1>Delete User</h1>
    <form action="{{route('delete-users')}}" method="POST">
        @csrf
        <x-input-label for="name" value="Name:" />
        <x-text-input type="text" id="name" name="test" required />
        <x-text-input type="text" id="name" name="test2" required />
        <x-primary-button type="submit">Delete User</x-primary-button>
    </form>
    @if (session('status'))
        <p>{{ session('status') }}</p>
    @endif

    <x-text-input name="name" required autofocus autocomplete="off"/>
    <x-text-input id="name" class="block mt-1 w-full" type="text" name="name" :value="old('name')" required autocomplete="name" />


    <x-alert value="success">
        コンポーネントの中に挿入される内容です。
    </x-alert>

</x-guest-layout>