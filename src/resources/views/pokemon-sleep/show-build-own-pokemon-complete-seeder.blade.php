<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(isset($ownPokemonCompleteSeeder))
        <table>
            <thead>
                <th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
            </thead>
            <tbody>
                
                @foreach($ownPokemonCompleteSeeder as $opcs)
                    <tr>
                        <td>{{$opcs->id}}</td>
                        <td><img src="{{$opcs->image_path}}"></td>
                        <td>{{$opcs->own_pokemon_name}}</td>
                        <td>{{$opcs->nickname}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                        <td>{{$opcs->id}}</td>
                    </tr>
                @endforeach
                
            </tbody>
        </table>
    @endif
</div>
