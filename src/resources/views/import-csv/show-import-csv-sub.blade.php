<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <p>ImportCsvSubで全レコードを取得後、sub_skills変数を通してshow-import-csv-subに表示する</p>
    @if ($sub_skills)
        @foreach ($sub_skills as $sub_skill)
            <p>{{$sub_skill->id}} {{$sub_skill->sub_skill}}</p>
        @endforeach
    @endif
</div>
