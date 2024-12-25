<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/get-json-own-pokemon-complete.js"></script>


<!-- Bootstrap CSS（<head>内に追加）-->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
<!-- Bootstrap JavaScript（<body>閉じタグの直前に追加） -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>

<div>
    <div id="loading" style="height: 100vh; width:100vw; background-color: gray; opacity: 50%; display: none; position: fixed;">
        <h1>Loading中</h1>
        <div class="spinner-border" role="status"></div>
    </div>
    <!-- Waste no more time arguing what a good man should be, be one. - Marcus Aurelius -->
    <form action="{{route('search')}}" method="post" >
        @csrf
        <label for="keyword">sub_skill</label>
        <!-- <input id="keyword" type="text" name="keyword" required autofocus> -->
        <select id="keyword" name="keyword">
            @foreach($sub_skills as $ss)
                <option>{{$ss->sub_skill}}</option>
            @endforeach
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
