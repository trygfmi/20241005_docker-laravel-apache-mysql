<div>
    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(isset($result))
        <table>
        <tr>
            <th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
        </tr>
        @foreach($result as $r)
            <tr>
                <td>{{$r->id}}</td>
                <td><img src="{{$r->image_path}}" alt="{{$r->own_pokemon_name}}"></td>
                <td>{{$r->own_pokemon_name}}</td>
                <td>{{$r->nickname}}</td>
                <td>{{$r->sp}}</td>
                <td>{{$r->lv}}</td>
                <td>{{$r->food_lv1}}</td>
                <td>{{$r->food_lv30}}</td>
                <td>{{$r->food_lv60}}</td>
                <td>{{$r->main_skill}}</td>
                <td>{{$r->sub_skill_lv1}}</td>
                <td>{{$r->sub_skill_lv25}}</td>
                <td>{{$r->sub_skill_lv50}}</td>
                <td>{{$r->sub_skill_lv75}}</td>
                <td>{{$r->sub_skill_lv100}}</td>
                <td>{{$r->personality}}</td>
                <td>{{$r->remarks}}</td>
            </tr>
        @endforeach
        </table>
    @endif
</div>
