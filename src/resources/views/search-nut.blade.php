<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="js/search-nut.js"></script>
<!-- <script src="./src/resources/js/create-myself/search-nut.js"></script> -->

<div>
    <div id="loading" style="height: 100vh; width: 100vw; background-color: gray; opacity: 50%; position: fixed; top: 0; left: 0; display: none">
        <h1>Loading中</h1>
    </div>
    <!-- It is never too late to be what you might have been. - George Eliot -->
    <form action="{{route('search-nut')}}" method="post" >
        @csrf
        <label for="keyword">検索ワード</label>
        <input id="keyword" type="text" name="keyword" required autofocus>
        <select id="selectName" name="selectName">
            <option>aaa</option>
            <option>bbb</option>
            <option>testtesttest</option>
        </select>
        <button type="submit">検索</button>
    </form>

   



    <button onclick="sendAjaxRequest()">ajax</button>
    <!-- <button onclick="sendAjaxRequest()">test</button> -->
    <!-- <button onclick="hello2()">hello2</button> -->
    <div id="output"></div>



    @if(isset($message))
        <p>{{$message}}</p>
    @endif

    @if(session('message'))
        <p>検索ワードでヒットしませんでした</p>
        @if(session('record'))
            @foreach(session('message') as $m)
                <p>{{implode(', ', $m)}}</p>
            @endforeach
        @endif
    @endif

    @if(session('selectName'))
        <p>{{session('selectName')}}</p>
    @endif

    {{--
    @if(session('input'))
        @foreach(session('input') as $input)
            <p>{{$input['id']}} {{$input['sub_skill']}}</p>
        @endforeach
    @endif
    --}}

    @if(session('input'))
    <table>
            <tr>
                <th>id</th>
                <th>ポケモン名</th>
                <th>ニックネーム</th>
                <th>sp</th>
                <th>lv</th>
                <th>食材lv1</th>
                <th>食材lv30</th>
                <th>食材lv60</th>
                <th>メインスキル</th>
                <th>サブスキルlv1</th>
                <th>サブスキルlv25</th>
                <th>サブスキルlv50</th>
                <th>サブスキルlv75</th>
                <th>サブスキルlv100</th>
                <th>性格</th>
                <th>備考</th>
            </tr>
        @foreach(session('input') as $input)
            {{--<p>{{$input['id']}} {{$input['サブスキルlv1']}}</p>--}}
                <tr>
                    <td>{{$input['id']}}</td> <td>{{$input['ポケモン名']}}</td> <td>{{$input['ニックネーム']}}</td> <td>{{$input['sp']}}</td>
                    <td>{{$input['lv']}}</td> <td>{{$input['食材lv1']}}</td> <td>{{$input['食材lv30']}}</td> <td>{{$input['食材lv60']}}</td>
                    <td>{{$input['メインスキル']}}</td>
                    <td>{{$input['サブスキルlv1']}}</td> <td>{{$input['サブスキルlv25']}}</td> <td>{{$input['サブスキルlv50']}}</td>
                    <td>{{$input['サブスキルlv75']}}</td> <td>{{$input['サブスキルlv100']}}</td>
                    <td>{{$input['性格']}}</td> <td>{{$input['備考']}}</td>
                </tr>
        @endforeach
        </table>
    @endif
</div>
