<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <p>MainSkillモデルに紐づく全レコードを取得後、main_skills変数を通してデータを画面に表示します</p>
    @if ($main_skills)
        @foreach ($main_skills as $main_skill)
            <p>{{$main_skill->id}} {{$main_skill->main_skill}}</p>
        @endforeach
    @endif
</div>
