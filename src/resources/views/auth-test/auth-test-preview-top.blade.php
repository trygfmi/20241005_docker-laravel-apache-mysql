<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    @if(isset($route_auth_tests))
        @foreach($route_auth_tests as $route_auth_test)
            <p>
                <h2>{{$route_auth_test->view_file_name}}</h2>
                <p>id:               {{$route_auth_test->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_auth_test->get_helper_name)}}" target="_blank">{{$route_auth_test->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_auth_test->route_url}}</p>
                @if(($route_auth_test->controller != ""))
                    <p>controller:       {{$route_auth_test->controller}}</p>
                @endif
                @if(($route_auth_test->get_method != ""))
                    <p>get_method:       {{$route_auth_test->get_method}}</p>
                @endif
                @if(($route_auth_test->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_auth_test->get_helper_name}}</p>
                @endif
                @if(($route_auth_test->middleware != ""))
                    <p>middleware:       {{$route_auth_test->middleware}}</p>
                @endif
                @if(($route_auth_test->post_method != ""))
                    <p>post_method:      {{$route_auth_test->post_method}}</p>
                @endif
                @if(($route_auth_test->post_helper_name != ""))
                    <p>post_helper_name: {{$route_auth_test->post_helper_name}}</p>
                @endif
                @if(($route_auth_test->model != ""))
                    <p>model:            {{$route_auth_test->model}}</p>
                @endif
                @if(($route_auth_test->table_name != ""))
                    <p>table_name:       {{$route_auth_test->table_name}}</p>
                @endif
            </p>
            <iframe src="{{route($route_auth_test->get_helper_name)}}"></iframe>
        @endforeach
    @endif





    
    {{--
    @if(isset($route_auth_tests))
        @foreach($route_auth_tests as $route_auth_test)
            <p>
                <h2>{{$route_auth_test->view_file_name}}</h2>
                <a href="{{route($route_auth_test->helper_name)}}">{{$route_auth_test->view_file_name}}</a>
                <p>route_url:   {{$route_auth_test->route_url}}</p>
                <p>controller:  {{$route_auth_test->controller}}</p>
                <p>method:      {{$route_auth_test->method}}</p>
                <p>helper_name: {{$route_auth_test->helper_name}}</p>
                <p>middleware:  {{$route_auth_test->middleware}}</p>
            </p>
            <iframe src="{{route($route_auth_test->helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}


    
    
</div>
