<div>
    <!-- When there is no desire, all things are at peace. - Laozi -->
    <p>SubSkillモデルに紐づく全レコードを取得後、sub_skills変数を通してデータを画面に表示します</p>
    @if ($sub_skills)
        @foreach ($sub_skills as $sub_skill)
            <p>{{$sub_skill->id}} <span style="background: {{$sub_skill->sub_skill_color}};">{{$sub_skill->sub_skill}}</span></p>
        @endforeach
    @endif
</div>
