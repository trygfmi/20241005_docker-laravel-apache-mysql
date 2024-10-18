<div>
    <!-- Because you are alive, everything is possible. - Thich Nhat Hanh -->
    <h1>hello</h1>
    <form action="{{route('test3-test3create')}}" method="post">
        @csrf
        <p>
            <label>
                shell_script_file_name
                <input type="text" name="shell_script_file_name">
            </label>
        </p>
        <p>
            <label>
                argument
                <input type="text" name="argument">
            </label>
        </p>
        <p>
            <label>
                shell_script_code
                <input type="text" name="shell_script_code">
            </label>
        </p>
        <p>
            <label>
                execute_example
                <input type="text" name="execute_example">
            </label>
        </p>

        <button type="submit">登録</button>
    </form>
</div>
