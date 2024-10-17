<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>hello</h1>
    <form action="{{route('else-test2-elseTest2')}}" method="get">
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
    </form>
</div>
