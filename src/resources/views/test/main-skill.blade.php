<div>
    <!-- Happiness is not something readymade. It comes from your own actions. - Dalai Lama -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>id</th>
                <th>main_skill</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->main_skill}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
