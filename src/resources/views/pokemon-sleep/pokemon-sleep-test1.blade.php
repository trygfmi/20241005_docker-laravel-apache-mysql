<div>
    <!-- I have not failed. I've just found 10,000 ways that won't work. - Thomas Edison -->
    <h1>hello</h1>
    <form action="{{route('pokemon-sleep-test1-createPost1')}}" method="post">
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
        <p>
            <label>
                test5
                <input type="text" name="test5">
            </label>
        </p>

        <button type="submit">登録</button>
    </form>
</div>
