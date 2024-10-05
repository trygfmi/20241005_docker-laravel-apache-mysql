<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <p>import-csvフォルダのimport-csv-testファイルを表示します</p>
    <p>inputでアップロードしたcsvファイルから、ImportCsvTestImportクラスで定義した値を取得し、作成したテーブルのカラム名で保存する</p>
    <form action="{{route('import-csv-test')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="file"  >testview</label>
        <input id="file" type="file" name="file" required >
        <button type="submit" >インポート</button>
    </form>
    
    @if (session('message'))
        {{session('message')}}
    @endif
</div>
