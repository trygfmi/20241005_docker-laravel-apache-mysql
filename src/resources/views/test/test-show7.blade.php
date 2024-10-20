<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    @if(isset($message))
        <table>
            <thead>
                <th>id</th>
                <th>personality</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->personality}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
