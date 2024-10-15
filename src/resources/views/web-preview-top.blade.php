<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>

<div>
    <!-- The biggest battle is the war against ignorance. - Mustafa Kemal Atatürk -->
    @if(isset($route_webs))
        @foreach($route_webs as $route_web)
            <p>
                <h2>{{$route_web->view_file_name}}</h2>
                <p>id:               {{$route_web->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_web->get_helper_name)}}" target="_blank">{{$route_web->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_web->route_url}}</p>
                @if(($route_web->controller != ""))
                    <p>controller:       {{$route_web->controller}}</p>
                @endif
                @if(($route_web->get_method != ""))
                    <p>get_method:       {{$route_web->get_method}}</p>
                @endif
                @if(($route_web->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_web->get_helper_name}}</p>
                @endif
                @if(($route_web->middleware != ""))
                    <p>middleware:       {{$route_web->middleware}}</p>
                @endif
                @if(($route_web->post_method != ""))
                    <p>post_method:      {{$route_web->post_method}}</p>
                @endif
                @if(($route_web->post_helper_name != ""))
                    <p>post_helper_name: {{$route_web->post_helper_name}}</p>
                @endif
                @if(($route_web->model != ""))
                    <p>model:            {{$route_web->model}}</p>
                @endif
                @if(($route_web->table_name != ""))
                    <p>table_name:       {{$route_web->table_name}}</p>
                @endif
            </p>
            <iframe src="{{route($route_web->get_helper_name)}}"></iframe>
        @endforeach
    @endif

    

    {{--
    @if(isset($route_webs))
        @foreach($route_webs as $route_web)
        <div style="width: 80vw; overflow-x: auto;">
            <table>
                <thead>
                    <th>id</th><th>view_file_name</th><th>page</th>
                    <th>route_url</th><th>controller</th><th>get_method</th>
                    <th>helper_name</th><th>middleware</th><th>post_method</th>
                    <th>post_helper_name</th><th>model</th><th>table_name</th>
                </thead>
                <tbody>
                    <tr>
                        <td>{{$route_web->id}}</td>
                        <td>{{$route_web->view_file_name}}</td>
                        <td>
                            <a href="{{route($route_web->get_helper_name)}}" target="_blank">{{$route_web->view_file_name}}</a>
                        </td>
                        <td>{{$route_web->route_url}}</td>
                        <td>{{$route_web->controller}}</td>
                        <td>{{$route_web->get_method}}</td>
                        <td>{{$route_web->get_helper_name}}</td>
                        <td>{{$route_web->middleware}}</td>
                        <td>{{$route_web->post_method}}</td>
                        <td>{{$route_web->post_helper_name}}</td>
                        <td>{{$route_web->model}}</td>
                        <td>{{$route_web->table_name}}</td>
                    </tr>
                </tbody>
            </table>
            </div>
            <iframe src="{{route($route_web->get_helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}



</div>
