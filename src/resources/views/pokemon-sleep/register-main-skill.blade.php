<x-guest-layout>    
    <div>
        <!-- Life is available only in the present moment. - Thich Nhat Hanh -->
        <p>pokemon-sleepフォルダのregister-main-skillファイルを表示します</p>
        <p>inputに入力した値がMainSkillモデルに存在していたら、既に登録されていますと表示し、されていなかったら、MainSkillモデルに紐づくテーブルに保存し、セッション経由でmain_skill変数を画面に表示する</p>
        <form action="{{route('register-main-skill')}}" method="post" >
            @csrf
            <x-input-label for="main_skill" value="メインスキル" />
            <x-text-input id="main_skill" name="main_skill" required autofocus />
            <x-primary-button>
                登録
            </x-primary-button>
        </form>

        @if (session('main_skill'))
            {{session('main_skill')}}が登録できました
        @endif
        
        @if (session('message'))
            {{session('message')}}
        @endif
    </div>
</x-guest-layout>