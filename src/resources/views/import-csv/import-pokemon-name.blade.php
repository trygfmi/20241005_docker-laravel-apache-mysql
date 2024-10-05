<div>
    <!-- The whole future lies in uncertainty: live immediately. - Seneca -->
    <p>import-csvフォルダのimport-pokemon-nameファイルを表示します</p>
    <p>inputでアップロードしたcsvファイルから、ImportPokemonNameImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する</p>
    <form action="{{route('import-pokemon-name')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="file"  >ポケモン</label>
        <input id="file" type="file" name="file" required >
        <button type="submit" >インポート</button>
    </form>
    
    @if (session('message'))
        {{session('message')}}
    @endif
</div>
