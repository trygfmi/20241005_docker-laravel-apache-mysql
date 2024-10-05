<div>
    <!-- Well begun is half done. - Aristotle -->
    <p>sub-skillフォルダのsub-skill-import-testファイルを表示します</p>
    <p>inputでアップロードしたcsvファイルから、SubSkillImportTestImportクラスで定義した値を取得し、作成したテーブルにカラム名を指定して保存する</p>
     <form action="{{route('sub-skill-import-test')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file" >サブスキル</label>
        <input id="file" type="file" name="file" required>
        <button type="submit">
            インポート
        </button>
    </form>

    @if (session('message'))
        {{session('message')}}
    @endif
</div>
