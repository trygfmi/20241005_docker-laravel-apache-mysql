<link rel="stylesheet" href="{{asset('css/custom-alert.css')}}">
<link rel="stylesheet" href="{{asset('css/custom-dialog.css')}}">

<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="/js/get-pokemon-template.js"></script>

<div>
    <!-- <a href="#tr10_0">移動</a> -->
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    @include('components.test.loading')
    @include('components.test.custom-alert-register')
    @include('components.test.custom-dialog')
    @include('components.test.custom-alert-remove')



    <select id="selectPokemonName">
        @if(isset($choice_pokemon))
            @foreach($choice_pokemon as $cp)
                <option>{{$cp->name}}</option>
            @endforeach
        @endif
    </select>
    <button id="test" onclick=getPokemonTemplate()>登録フォーム表示</button>

    <div id="formWrapper" style="display: none;">
        <form action="{{route('save-choice-pokemon')}}" method="post">
            @csrf
            <div id="registerForm">
                <table>
                    <thead>
                        <tr>
                        <th>削除</th><th>id</th><th>画像</th><th>ポケモン名</th><th>ニックネーム</th><th>sp</th><th>lv</th><th>食材lv1</th><th>食材lv30</th><th>食材lv60</th><th>メインスキル</th><th>サブスキルlv1</th><th>サブスキルlv25</th><th>サブスキルlv50</th><th>サブスキルlv75</th><th>サブスキルlv100</th><th>性格</th><th>備考</th>
                        </tr>
                    </thead>
                    <tbody id="registerTableTbody">
                        
                    </tbody>
                </table>
            </div>

            <button id="register-button" type="submit" style="position: fixed; bottom: 5%; right: 5%;">登録</button>
        </form>
    </div>
    <!-- document.createElementメソッドを実行したときのid名設定用 -->
    <input id="tableRowCount" type="hidden" name="hiddenCount" value="0">
    <!-- 画像のsrc用 -->
    <input id="tableImgSrc" type="hidden" value="{{asset('storage/images/')}}"/>
    


    @if(session('success-register'))
        <script src="{{asset('js/custom-alert.js')}}">
            
        </script>
    @endif
</div>



