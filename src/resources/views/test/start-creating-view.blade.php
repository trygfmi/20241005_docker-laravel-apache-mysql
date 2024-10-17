<div>
    <!-- The best way to take care of the future is to take care of the present moment. - Thich Nhat Hanh -->
    <h1>hello</h1>
    <form action="{{route('start-creating-view-create')}}" method="post">
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
