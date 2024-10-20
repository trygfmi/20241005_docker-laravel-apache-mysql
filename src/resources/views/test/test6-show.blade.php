<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>personality</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->personality}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
