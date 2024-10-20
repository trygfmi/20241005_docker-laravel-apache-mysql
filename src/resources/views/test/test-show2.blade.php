<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>shell_script_file_name</th>
                <th>argument</th>
                <th>shell_script_code</th>
                <th>execute_example</th>
                <th>prepare_shell_script_code</th>
                <th>prepare_execute_example</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->shell_script_file_name}}</td>
                    <td>{{$m->argument}}</td>
                    <td>{{$m->shell_script_code}}</td>
                    <td>{{$m->execute_example}}</td>
                    <td>{{$m->prepare_shell_script_code}}</td>
                    <td>{{$m->prepare_execute_example}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
