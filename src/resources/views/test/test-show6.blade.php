<div>
    <!-- Simplicity is the consequence of refined emotions. - Jean D'Alembert -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>main_skill</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->main_skill}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
