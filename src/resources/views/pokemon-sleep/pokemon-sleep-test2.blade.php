<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>hello</h1>
    <form action="{{route('pokemon-sleep-test2-createPost2')}}" method="post">
        @csrf
        <p>
            <label>
                test1
                <input type="text" name="test1">
            </label>
        </p>
        <p>
            <label>
                test2
                <input type="text" name="test2">
            </label>
        </p>
        <p>
            <label>
                test3
                <input type="text" name="test3">
            </label>
        </p>
        <p>
            <label>
                test4
                <input type="text" name="test4">
            </label>
        </p>

        <button type="submit">登録</button>
    </form>
</div>
