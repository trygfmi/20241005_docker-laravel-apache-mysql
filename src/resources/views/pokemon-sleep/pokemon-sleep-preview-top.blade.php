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
    <p>
        <h2>welcome</h2>
        <a href="{{route('welcome')}}" target="_blank">welcome page</a>
    </p>
    <iframe src="{{route('welcome')}}" ></iframe>



    <p>
        <h2>foods</h2>
        <a href="{{route('preview-foods')}}" target="_blank">foods</a>
    </p>
    <iframe src="{{route('preview-foods')}}" ></iframe>
    <p>
        <h2>foods-save</h2>
        <a href="{{route('foods-save')}}" target="_blank">foods-save</a>
    </p>
    <iframe src="{{route('foods-save')}}" ></iframe>



    <p>
        <h2>register-food</h2>
        <a href="{{route('preview-register-food')}}" target="_blank">register-food</a>
    </p>
    <iframe src="{{route('preview-register-food')}}" ></iframe>



    <p>
        <h2>register-main-skill</h2>
        <a href="{{route('preview-register-main-skill')}}" target="_blank">register-main-skill</a>
    </p>
    <iframe src="{{route('preview-register-main-skill')}}" ></iframe>
    <p>
        <h2>show-registered-main-skills</h2>
        <a href="{{route('show-registered-main-skills')}}" target="_blank">show-registered-main-skills</a>
    </p>
    <iframe src="{{route('show-registered-main-skills')}}" ></iframe>



    <p>
        <h2>register-sub-skill</h2>
        <a href="{{route('preview-register-sub-skill')}}" target="_blank">register-sub-skill</a>
    </p>
    <iframe src="{{route('preview-register-sub-skill')}}" ></iframe>
    <p>
        <h2>show-registered-sub-skills</h2>
        <a href="{{route('show-registered-sub-skills')}}" target="_blank">show-registered-sub-skills</a>
    </p>
    <iframe src="{{route('show-registered-sub-skills')}}" ></iframe>



    <p>
        <h2>search-nut</h2>
        <a href="{{route('preview-search-nut')}}" target="_blank">search-nut</a>
    </p>
    <iframe src="{{route('preview-search-nut')}}" ></iframe>


    

    <p>
        <h2>import-own-pokemon</h2>
        <a href="{{route('preview-import-own-pokemon')}}" target="_blank">import-own-pokemon</a>
    </p>
    <iframe src="{{route('preview-import-own-pokemon')}}" ></iframe>
    <p>
        <h2>show-import-own-pokemon</h2>
        <a href="{{route('show-import-own-pokemon')}}" target="_blank">show-import-own-pokemon</a>
    </p>
    <iframe src="{{route('show-import-own-pokemon')}}" ></iframe>



    <p>
        <h2>手持ちポケモン登録用ページ</h2>
        <a href="{{route('choice-pokemon')}}" target="_blank">choice-pokemon</a>
    </p>
    <iframe src="{{route('choice-pokemon')}}" ></iframe>

    <p>
        <h2>手持ちポケモン閲覧用ページ</h2>
        <a href="{{route('show-own-pokemon-complete')}}" target="_blank">show-own-pokemon-complete</a>
    </p>
    <iframe src="{{route('show-own-pokemon-complete')}}" ></iframe>
    <p>
        <h2>search-own-pokemon-complete</h2>
        <a href="{{route('search-own-pokemon-complete')}}" target="_blank">search-own-pokemon-complete</a>
    </p>
    <iframe src="{{route('search-own-pokemon-complete')}}" ></iframe>











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