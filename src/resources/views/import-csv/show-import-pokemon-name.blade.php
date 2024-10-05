<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <p>ImportPokemonNameで全レコードを取得後、pokemon_names変数を通して画面に表示する</p>
    @if ($pokemon_names)
        @foreach ($pokemon_names as $pokemon_name)
            <p>{{$pokemon_name->id}} {{$pokemon_name->pokemon_name}}</p>
        @endforeach
    @endif
</div>
