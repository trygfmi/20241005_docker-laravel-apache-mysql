<div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
    <p>import-csvフォルダのimport-csvファイルを表示します</p>
    <p>inputでアップロードしたcsvファイルから、ImportCsvImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する</p>
    <form action="{{route('import-csv')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="file"  >手持ちポケモン</label>
        <input id="file" type="file" name="file" required >
        <button type="submit" >インポート</button>
    </form>
    
    @if (session('message'))
        {{session('message')}}
    @endif
</div>
