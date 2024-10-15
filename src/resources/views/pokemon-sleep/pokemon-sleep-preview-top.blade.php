<link rel="prefetch" href="{{route('welcome')}}">
<link rel="prefetch" href="{{route('show-own-pokemon-complete')}}">


<style>
    /* プレビューを表示する領域のスタイル */
    iframe{
        width: 80vw;
        height: 400px;
    }

    /* プレビュー用のiframeスタイル */
    #preview {
            position: fixed;
            top: 50px;
            left: 50px;
            width: 50%;
            height: 50%;
            border: 1px solid #ccc;
            display: none; /* 初期状態では非表示 */
            z-index: 1000;
        }
</style>


<div>
    <!-- Very little is needed to make a happy life. - Marcus Aurelius -->
    {{--
    @if(isset($route_pokemon_sleeps))
        @foreach($route_pokemon_sleeps as $route_pokemon_sleep)
            <p>
                <h2>{{$route_pokemon_sleep->view_file_name}}</h2>
                <a href="{{route($route_pokemon_sleep->get_helper_name)}}">{{$route_pokemon_sleep->view_file_name}}</a>
                <p>route_url:   {{$route_pokemon_sleep->route_url}}</p>
                <p>controller:  {{$route_pokemon_sleep->controller}}</p>
                <p>method:      {{$route_pokemon_sleep->method}}</p>
                <p>helper_name: {{$route_pokemon_sleep->get_helper_name}}</p>
                <p>middleware:  {{$route_pokemon_sleep->middleware}}</p>
            </p>
            <iframe src="{{route($route_pokemon_sleep->get_helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}



    @if(isset($route_pokemon_sleeps))
        @foreach($route_pokemon_sleeps as $route_pokemon_sleep)
            <p>
                <h2>{{$route_pokemon_sleep->view_file_name}}</h2>
                <p>id:               {{$route_pokemon_sleep->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_pokemon_sleep->get_helper_name)}}" target="_blank">{{$route_pokemon_sleep->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_pokemon_sleep->route_url}}</p>
                @if(($route_pokemon_sleep->controller != ""))
                    <p>controller:       {{$route_pokemon_sleep->controller}}</p>
                @endif
                @if(($route_pokemon_sleep->get_method != ""))
                    <p>get_method:       {{$route_pokemon_sleep->get_method}}</p>
                @endif
                @if(($route_pokemon_sleep->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_pokemon_sleep->get_helper_name}}</p>
                @endif
                @if(($route_pokemon_sleep->middleware != ""))
                    <p>middleware:       {{$route_pokemon_sleep->middleware}}</p>
                @endif
                @if(($route_pokemon_sleep->post_method != ""))
                    <p>post_method:      {{$route_pokemon_sleep->post_method}}</p>
                @endif
                @if(($route_pokemon_sleep->post_helper_name != ""))
                    <p>post_helper_name: {{$route_pokemon_sleep->post_helper_name}}</p>
                @endif
                @if(($route_pokemon_sleep->model != ""))
                    <p>model:            {{$route_pokemon_sleep->model}}</p>
                @endif
                @if(($route_pokemon_sleep->table_name != ""))
                    <p>table_name:       {{$route_pokemon_sleep->table_name}}</p>
                @endif
            </p>
            <iframe src="{{route($route_pokemon_sleep->get_helper_name)}}"></iframe>
        @endforeach
    @endif









    <p><a href="http://localhost:8081/foods" onmouseover="showIframePreview(this)" onmouseout="hideIframePreview()">data-url</a></p>



    @php
        $url = route('welcome')
    @endphp
    <!-- <p><a href="{{$url}}" onmouseover="showPreview('{{$url}}')" onmouseout="hidePreview()">次のページ</a></p> -->
    <!-- <div id="preview"></div> -->
    <p><a href="{{$url}}" onmouseover="showIframePreview('{{$url}}')" onmouseout="hideIframePreview()">マウスを乗せたらプレビューが表示されます</a></p>
    <iframe id="preview"></iframe>
</div>




<script>
    function showIframePreview(link) {
            const url = link; // hrefからURLを取得
            const iframe = document.getElementById('preview');
            iframe.src = url; // iframeのsrcにURLを設定
            iframe.style.display = 'block'; // iframeを表示
            iframe.style.backgroundColor = "white";
        }

    function hideIframePreview() {
        const iframe = document.getElementById('preview');
        iframe.style.display = 'none'; // iframeを非表示
        iframe.src = ''; // プレビューの内容をリセット
    }
</script>