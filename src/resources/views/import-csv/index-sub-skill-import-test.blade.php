<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <p>SubSkillImportTestモデルを使用して全レコードを取得後、skills変数として渡し、画面に表示する</p>
     @if ($skills)
        @foreach ($skills as $skill)
            <p>{{$skill->id}} {{$skill->sub_skill}}</p>
        @endforeach
     @endif
</div>
