<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <p>SubSkillモデルに紐づく全レコードを取得後、sub_skills変数を通してデータを画面に表示します</p>
    @if ($sub_skills)
        @foreach ($sub_skills as $sub_skill)
            <p>{{$sub_skill->id}} {{$sub_skill->sub_skill}}</p>
        @endforeach
    @endif
</div>
