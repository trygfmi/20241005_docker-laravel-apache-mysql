<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <p>middlewareのtestを実施後、ImportCsvモデルで全レコードを取得後、main_skills変数を通して画面に表示する</p>
    @if ($main_skills)
        @foreach ($main_skills as $main_skill)
            <p>{{$main_skill->id}} {{$main_skill->main_skill}}</p>
        @endforeach
    @endif
</div>
