<div>
    <!-- Knowing is not enough; we must apply. Being willing is not enough; we must do. - Leonardo da Vinci -->
    <h1>hello</h1>
    <form action="{{route('insert-input-element-test-insertInputElementTest')}}" method="get">
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
    </form>
</div>
