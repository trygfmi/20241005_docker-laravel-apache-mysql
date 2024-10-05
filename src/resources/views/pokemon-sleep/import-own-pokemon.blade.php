<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    <form action="{{route('import-own-pokemon')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div>
            <label for="file">csvファイルを選択してください</label>
        </div>
        <div>
            <input id="file" type="file" name="file" required>
            <button type="submit">アップロード</button>
        </div>
    </form>

    @if(session('message'))
        {{session('message')}}
    @endif
</div>
