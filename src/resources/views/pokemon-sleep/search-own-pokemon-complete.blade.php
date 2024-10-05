<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/get-json-own-pokemon-complete.js"></script>
<div>
    <div id="loading" style="height: 100vh; width:100vw; background-color: gray; opacity: 50%; display: none; position: fixed;">
        <h1>Loading中</h1>
    </div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <form action="{{route('search')}}" method="post" >
        @csrf
        <label for="keyword">sub_skill</label>
        <!-- <input id="keyword" type="text" name="keyword" required autofocus> -->
        <select id="keyword" name="keyword">
            <option>スキル確率アップS</option>
            <option>おてつだいスピードS</option>
            <option>食材確率アップS</option>
            <option>最大所持数アップS</option>
            <option>スキルレベルアップS</option>
            <option>スキル確率アップM</option>
            <option>おてつだいスピードM</option>
            <option>食材確率アップM</option>
            <option>最大所持数アップM</option>
            <option>最大所持数アップL</option>
            <option>スキルレベルアップM</option>
            <option>きのみの数S</option>
            <option>睡眠EXPボーナス</option>
            <option>おてつだいボーナス</option>
            <option>げんき回復ボーナス</option>
            <option>リサーチEXPボーナス</option>
            <option>ゆめのかけらボーナス</option>
        </select>
        <button type="submit">検索</button>
    </form>

    <button onclick="sendAjaxRequest()">ajax</button>
    <div id="output">

    </div>

    @if(isset($result))
        @foreach($result as $r)
            <p>------------------</p>
            <p>id:{{$r->id}}</p>
            <p>own_pokemon_name:{{$r->own_pokemon_name}}</p>
            <p>sp:{{$r->sp}}</p>
            <p>lv:{{$r->lv}}</p>
            <p>food_lv1:{{$r->food_lv1}}</p>
            <p>food_lv30:{{$r->food_lv30}}</p>
            <p>food_lv60:{{$r->food_lv60}}</p>
            <p>main_skill:{{$r->main_skill}}</p>
            <p>sub_skill_lv1:{{$r->sub_skill_lv1}}</p>
            <p>sub_skill_lv25:{{$r->sub_skill_lv25}}</p>
            <p>sub_skill_lv50:{{$r->sub_skill_lv50}}</p>
            <p>sub_skill_lv75:{{$r->sub_skill_lv75}}</p>
            <p>sub_skill_lv100:{{$r->sub_skill_lv100}}</p>
            <p>personality:{{$r->personality}}</p>
            <p>remarks:{{$r->remarks}}</p>
            <p>created_at:{{$r->created_at}}</p>
            <p>updated_at:{{$r->updated_at}}</p>
            <p>------------------</p>
        @endforeach
    @endif
</div>
