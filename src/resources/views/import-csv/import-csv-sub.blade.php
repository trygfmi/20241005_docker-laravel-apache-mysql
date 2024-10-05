<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <p>import-csvフォルダのimport-csv-subファイルを表示します</p>
    <p>inputでアップロードしたファイルから、ImportSubTestImportクラスで定義した値を取得して、作成したテーブルのカラム名で保存する</p>
    <form action="{{route('import-csv-sub')}}" method="post" enctype="multipart/form-data" >
        @csrf
        <label for="file"  >sub</label>
        <input id="file" type="file" name="file" required >
        <button type="submit" >インポート</button>
    </form>
    
    @if (session('message'))
        {{session('message')}}
    @endif
</div>
