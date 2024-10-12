<x-guest-layout>
    <div>
        <!-- Do what you can, with what you have, where you are. - Theodore Roosevelt -->
        <p>pokemon-sleepフォルダのregister-sub-skillファイルを表示します</p>
        <p>inputに入力した値がSubSkillモデルに存在していたら、既に登録されていますと表示し、されていなかったら、SubSkillモデルに紐づくテーブルに保存し、セッション経由でmessage変数のデータを画面に表示します</p>
        <form action="{{route('register-sub-skill')}}" method="post" >
            @csrf
            <x-input-label for="sub_skill" value="サブスキル" />
            {{--<x-text-input id="sub_skill" name="sub_skill" :value="old('sub_skill')" required autofocus />--}}
            <x-text-input id="sub_skill" name="sub_skill" :value="old('sub_skill')" required />
            <x-primary-button>
                登録
            </x-primary-button>
        </form>

        @if (session('message'))
            {{session('message')}}
        @endif
    </div>
</x-guest-layout>