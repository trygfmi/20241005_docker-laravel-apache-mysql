<div>
    <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
        <p>Foodモデルで全レコードを取得後、foods変数を通して画面に表示</p>
        @if (isset($foods))
            {{$foods}}
            @foreach ($foods as $food)
                <!--
                <li>
                    id:{{$food->name}} food:{{$food->name}}
                    energy:{{$food->energy}} created_at:{{$food->created_at}}
                    updated_at:{{$food->updated_at}}
                </li>
                -->
                <li>
                    {{$food->id}} {{$food->name}} {{$food->energy}}
                    {{$food->created_at}} {{$food->updated_at}}
                </li>
            @endforeach
        @endif
</div>
