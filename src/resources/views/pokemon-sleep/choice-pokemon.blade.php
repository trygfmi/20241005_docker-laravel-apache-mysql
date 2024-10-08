<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/get-pokemon-template.js"></script>

<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <select id="selectPokemonName">
        @if(isset($choice_pokemon))
            @foreach($choice_pokemon as $cp)
                <option>{{$cp->name}}</option>
            @endforeach
        @endif
    </select>
    <button id="test" onclick="getPokemonTemplate()">登録フォーム表示</button>



    @if(session('success-register'))
        <script>
            alert("{{session('success-register')}}");
        </script>
    @endif



    <div id="formWrapper" style="display: none;">
        <form action="{{route('save-choice-pokemon')}}" method="post">
            @csrf
            <div id="registerForm">
                <table>
                    <thead>
                        <tr>
                            <th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
                        </tr>
                    </thead>
                    <tbody id="registerTableForm">
                        
                    </tbody>
                </table>
            </div>

            <button id="register-button" type="submit">登録</button>
        </form>
    </div>
    <!-- document.createElementメソッドを実行したときのid名設定用 -->
    <input id="hidden-count" type="hidden" name="hidden-count" value="0">
    


    
</div>



