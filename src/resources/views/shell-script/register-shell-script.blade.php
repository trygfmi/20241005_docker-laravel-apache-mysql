<div>
    <!-- The only way to do great work is to love what you do. - Steve Jobs -->
    <h1>hello</h1>
    <form action="{{route('register-shell-script-register')}}" method="post">
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
        <p>
            <label>
                prepare_shell_script_code
                <input type="text" name="prepare_shell_script_code">
            </label>
        </p>
        <p>
            <label>
                prepare_execute_example
                <input type="text" name="prepare_execute_example">
            </label>
        </p>

        <button type="submit">登録</button>
    </form>


    @if(session('message'))
        {{session('message')}}
    @endif
</div>
