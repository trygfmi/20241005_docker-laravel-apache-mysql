<link rel="stylesheet" href="{{asset('css/custom-alert.css')}}">

<div>
    @include('components.test.custom-alert-remove')

    <!-- Simplicity is an acquired taste. - Katharine Gerould -->
    @if(isset($result))
        <form action="{{route('delete-own-pokemon-complete')}}" method="post">
            @csrf
            <table>
                <tr>
                    <th>削除選択</th><th>id</th><th>画像</th><th>図鑑番号</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
                </tr>
                @foreach($result as $r)
                    <tr>
                        <td><input class="test" type="checkbox" name="deleteId[]" value="{{$r->id}}"></td>
                        <td>{{$r->id}}</td>
                        @if($r->remarks == "色違い")
                            <td><img src="{{$r->shiny_image_path}}" alt="{{$r->own_pokemon_name}}"></td>
                        @else
                            <td><img src="{{$r->image_path}}" alt="{{$r->own_pokemon_name}}"></td>
                        @endif
                        <td>{{$r->encyclopedia_number}}</td>
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
            <button id="deleteButton" type="submit" disabled style="position: fixed; bottom: 5%; right: 5%;">削除</button>
        </form>
    @endif



    @if(session('success-delete'))
        <script src="{{asset('js/custom-alert-remove.js')}}">
            
        </script>
    @endif
</div>



<!-- scriptをファイルの先頭に配置すると動作しなくなります -->
<script>
    function isAble(){
        // document.getElementById('deleteButton').disabled = false;
        document.getElementById('test').addEventListener('change', function() {
            const textInput = document.getElementById('deleteButton')
            if (this.checked) {
                // チェックされたら disabled を解除
                textInput.disabled = false;
            } else {
                // チェックが外れたら再度 disabled を追加
                textInput.disabled = true;
            }
        });
    }

    // チェックボックスの状態を確認する関数
    function checkCheckboxes() {
        const checkboxes = document.querySelectorAll('.test');
        const textInput = document.getElementById('deleteButton');
        
        // チェックされているチェックボックスの数をカウント
        const checkedCount = Array.from(checkboxes).filter(checkbox => checkbox.checked).length;

        // 1つ以上チェックされていたらdisabledを解除、0個ならdisabledを追加
        textInput.disabled = checkedCount === 0;
        // textInput.disabled = false
    }

    // 全てのチェックボックスにイベントリスナーを追加
    document.querySelectorAll('.test').forEach(checkbox => {
        checkbox.addEventListener('change', checkCheckboxes);
    });

</script>