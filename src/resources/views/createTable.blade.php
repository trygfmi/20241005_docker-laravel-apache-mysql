<x-guest-layout>    
    <div>
        <!-- Simplicity is an acquired taste. - Katharine Gerould -->
        hello
        <form action="{{route('create-table')}}" method="post">
            @csrf
            <x-input-label for="tableName" name="tableName" value="tableName" />
            <x-text-input id="tableName" name="tableName" required autofoucs />
            <x-primary-button type="submit">
                テーブル登録
            </x-primary-button>
        </form>
    </div>
</x-guest-layout>    