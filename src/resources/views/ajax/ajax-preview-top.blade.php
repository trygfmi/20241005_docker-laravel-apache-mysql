<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- Be present above all else. - Naval Ravikant -->
    @if(isset($route_ajaxes))
        @foreach($route_ajaxes as $route_ajax)
            <p>
                <h2>{{$route_ajax->view_file_name}}</h2>
                <p>id:               {{$route_ajax->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_ajax->get_helper_name)}}" target="_blank">{{$route_ajax->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_ajax->route_url}}</p>
                @if(($route_ajax->controller != ""))
                    <p>controller:       {{$route_ajax->controller}}</p>
                @endif
                @if(($route_ajax->get_method != ""))
                    <p>get_method:       {{$route_ajax->get_method}}</p>
                @endif
                @if(($route_ajax->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_ajax->get_helper_name}}</p>
                @endif
                @if(($route_ajax->middleware != ""))
                    <p>middleware:       {{$route_ajax->middleware}}</p>
                @endif
                @if(($route_ajax->post_method != ""))
                    <p>post_method:      {{$route_ajax->post_method}}</p>
                @endif
                @if(($route_ajax->post_helper_name != ""))
                    <p>post_helper_name: {{$route_ajax->post_helper_name}}</p>
                @endif
                @if(($route_ajax->model != ""))
                    <p>model:            {{$route_ajax->model}}</p>
                @endif
                @if(($route_ajax->table_name != ""))
                    <p>table_name:       {{$route_ajax->table_name}}</p>
                @endif
            </p>
            <iframe src="{{route($route_ajax->get_helper_name)}}"></iframe>
        @endforeach
    @endif




    {{--
    @if(isset($route_ajaxes))
        @foreach($route_ajaxes as $route_ajax)
            <p>
                <h2>{{$route_ajax->view_file_name}}</h2>
                <a href="{{route($route_ajax->helper_name)}}">{{$route_ajax->view_file_name}}</a>
                <p>route_url:   {{$route_ajax->route_url}}</p>
                <p>controller:  {{$route_ajax->controller}}</p>
                <p>method:      {{$route_ajax->method}}</p>
                <p>helper_name: {{$route_ajax->helper_name}}</p>
                <p>middleware:  {{$route_ajax->middleware}}</p>
            </p>
            <iframe src="{{route($route_ajax->helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}




</div>
