<div>
    <!-- Order your soul. Reduce your wants. - Augustine -->
    <h1>hello</h1>
    <form action="{{route('pokemon-sleep-test-createPost')}}" method="post">
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

        <button type="submit">登録</button>
    </form>
</div>
