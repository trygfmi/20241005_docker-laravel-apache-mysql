<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <p>ForeignIdPokemonモデルにインポートするcsvファイルをアップロードする画面を表示します</p>
    <p>ForeignIdPokemonImportを使用してForeignIdPokemonモデルにcsvファイルの内容をインポートして、message変数を通して画面にステータスを表示します</p>
    <p>インポートするcsvファイルのmain_skill_idがmain_skillsテーブルに存在するidだったらインポートできます</p>
    <form action="{{route('import-foreign-id-pokemon')}}" method="post" enctype="multipart/form-data">
        @csrf
        <label for="file">foreign-id-pokemon</label>
        <input id="file" type="file" name="file" required>
        <button type="submit">アップロード</button>
    </form>

    @if(session('message'))
        {{session('message')}}
    @endif
</div>
