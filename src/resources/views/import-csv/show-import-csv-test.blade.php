<div>
    <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
    <p>ImportCsvTestで全レコードを取得後、names変数を通して画面に表示します</p>
    @if ($names)
        @foreach ($names as $name)
            <p>{{$name->id}} {{$name->name}}</p>
        @endforeach
    @endif
</div>
