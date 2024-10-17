<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- An unexamined life is not worth living. - Socrates -->
    {{--
    @if(isset($route_tests))
        @foreach($route_tests as $route_test)
            <p>
                <h2>{{$route_test->view_file_name}}</h2>
                <a href="{{route($route_test->helper_name)}}">{{$route_test->view_file_name}}</a>
                <p>route_url:   {{$route_test->route_url}}</p>
                <p>controller:  {{$route_test->controller}}</p>
                <p>method:      {{$route_test->method}}</p>
                <p>helper_name: {{$route_test->helper_name}}</p>
                <p>middleware:  {{$route_test->middleware}}</p>
            </p>
            <iframe src="{{route($route_test->helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}



    @if(isset($route_tests))
        @foreach($route_tests as $route_test)
            <p>
                <h2>{{$route_test->view_file_name}}</h2>
                <p>id:               {{$route_test->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_test->get_helper_name)}}" target="_blank">{{$route_test->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_test->route_url}}</p>
                @if(($route_test->controller != ""))
                    <p>controller:       {{$route_test->controller}}</p>
                @endif
                @if(($route_test->get_method != ""))
                    <p>get_method:       {{$route_test->get_method}}</p>
                @endif
                @if(($route_test->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_test->get_helper_name}}</p>
                @endif
                @if(($route_test->middleware != ""))
                    <p>middleware:       {{$route_test->middleware}}</p>
                @endif
                @if(($route_test->post_method != ""))
                    <p>post_method:      {{$route_test->post_method}}</p>
                @endif
                @if(($route_test->post_helper_name != ""))
                    <p>post_helper_name: {{$route_test->post_helper_name}}</p>
                @endif
                @if(($route_test->model != ""))
                    <p>model:            {{$route_test->model}}</p>
                @endif
                @if(($route_test->table_name != ""))
                    <p>table_name:       {{$route_test->table_name}}</p>
                @endif
                @if(($route_test->created_at != ""))
                    <p>created_at:       {{$route_test->created_at}}</p>
                @endif
            </p>
            <iframe src="{{route($route_test->get_helper_name)}}"></iframe>
        @endforeach
    @endif




    
</div>
