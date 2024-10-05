<div>
    <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
    <p>import-csvフォルダのmain-skill-testファイルを表示します</p>
    <p>inputでアップロードしたファイルから、MainSkillTestImportクラスで値を抽出して、作成したテーブルにカラム名を指定して保存</p>
    <form action="{{route('main-skill-test')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">メインスキル</label>
        <input id="file" type="file" name="file" required>
        <button type="submit">
            インポート
        </button>
    </form>

    @if (session('message'))
        {{session('message')}}
    @endif
</div>
