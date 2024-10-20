<div>
    <!-- It is quality rather than quantity that matters. - Lucius Annaeus Seneca -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>food1</th>
                <th>food2</th>
                <th>food3</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->food1}}</td>
                    <td>{{$m->food2}}</td>
                    <td>{{$m->food3}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
