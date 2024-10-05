<x-guest-layout>
    <div>
        <!-- Simplicity is the essence of happiness. - Cedric Bledsoe -->
        <p>pokemon-sleepフォルダのregister-foodを表示します</p>
        <p>inputで入力されたnameが存在したら、既にnameは存在していますと表示し、存在しなかったらFoodに紐づくテーブルに保存し、セッション経由でfood変数とenergy変数を画面に表示します</p>
        {{--
        <form action="{{route('insert-food-test')}}" method="post">
            @csrf
            
            <x-input-label for="food" name="food" value="食べ物" />
            <x-text-input id="food" name="food" required autofocus />

            <x-input-label for="energy" name="energy" value="エネルギー量" />
            <x-text-input id="energy" name="energy" required  />            

            <x-primary-button type="submit">
                登録
            </x-primary-button>
        </form>
        --}}
        

        
        <form action="{{route('insert-food')}}" method="post">
            @csrf
            
            <x-input-label for="food" name="food" value="食べ物" />
            <x-text-input id="food" name="food" required autofocus />
        
            <x-input-label for="energy" name="energy" value="エネルギー量" />
            <x-text-input id="energy" name="energy" required  />

            <x-primary-button type="submit">
                登録
            </x-primary-button>
        </form>
        
        

        @if (session('food'))
            <p>{{session('food')}}と{{session('energy')}}が登録されました</p>
        @endif

        @if (session('error'))
            <p>{{session('error')}}</p>
        @endif
    </div>
</x-guest-layout>