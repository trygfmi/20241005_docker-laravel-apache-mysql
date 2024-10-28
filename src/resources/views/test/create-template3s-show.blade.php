<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    <h1>hello</h1>
    @if(isset($message))
        <table>
            <thead>
                <th>id</th>
                <th>food_lv1_id</th>
                <th>food_lv30_id</th>
                <th>food_lv60_id</th>
                <th>main_skill_id</th>
            </thead>
            <tbody>
            @foreach($message as $m)
                <tr>
                    <td>{{$m->id}}</td>
                    <td>{{$m->food_lv1_id}}</td>
                    <td>{{$m->food_lv30_id}}</td>
                    <td>{{$m->food_lv60_id}}</td>
                    <td>{{$m->main_skill_id}}</td>
                </tr>
            @endforeach
            </tbody>
        </table>
    @endif
</div>
