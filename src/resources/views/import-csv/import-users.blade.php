<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <p>import-csvフォルダのimport-usersを表示します</p>
    <p>inputでアップロードしたcsvファイルから、UserImportクラスで値を抽出して、作成したテーブルのカラム名で保存する</p>
    <form action="{{ route('import.users') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <input type="file" name="file" required>
        <button type="submit">インポート</button>
    </form>

    @if (session('message'))
        <div>
            {{ session('message') }}
        </div>
    @endif

    @if (session('success'))
        <div>
            {{ session('success') }}
        </div>
    @endif
</div>
