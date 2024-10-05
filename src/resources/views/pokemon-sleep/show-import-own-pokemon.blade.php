<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    @if(isset($ownPokemon))
        <table>
            <tr>
                <th>id</th>
                <th>ポケモン名</th>
                <th>ニックネーム</th>
                <th>sp</th>
                <th>lv</th>
                <th>食材lv1</th>
                <th>食材lv30</th>
                <th>食材lv60</th>
                <th>メインスキル</th>
                <th>サブスキルlv1</th>
                <th>サブスキルlv25</th>
                <th>サブスキルlv50</th>
                <th>サブスキルlv75</th>
                <th>サブスキルlv100</th>
                <th>性格</th>
                <th>備考</th>
            </tr>
        @foreach($ownPokemon as $op)
            <tr>
                <td>{{$op->id}}</td> <td>{{$op->ポケモン名}}</td> <td>{{$op->ニックネーム}}</td> <td>{{$op->sp}}</td>
                <td>{{$op->lv}}</td> <td>{{$op->食材lv1}}</td> <td>{{$op->食材lv30}}</td> <td>{{$op->食材lv60}}</td>
                <td>{{$op->メインスキル}}</td>
                <td>{{$op->サブスキルlv1}}</td> <td>{{$op->サブスキルlv25}}</td> <td>{{$op->サブスキルlv50}}</td>
                <td>{{$op->サブスキルlv75}}</td> <td>{{$op->サブスキルlv100}}</td>
                <td>{{$op->性格}}</td> <td>{{$op->備考}}</td>
            </tr>
        @endforeach
        </table>
    @endif
</div>
