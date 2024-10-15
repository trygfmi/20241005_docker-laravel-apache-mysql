<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- If you do not have a consistent goal in life, you can not live it in a consistent way. - Marcus Aurelius -->
    @if(isset($route_import_csvs))
        @foreach($route_import_csvs as $route_import_csv)
            <p>
                <h2>{{$route_import_csv->view_file_name}}</h2>
                <p>id:               {{$route_import_csv->id}}</p>
                <p>
                   個別ページ:
                    <a href="{{route($route_import_csv->get_helper_name)}}" target="_blank">{{$route_import_csv->view_file_name}}</a>
                </p>
                <p>route_url:        {{$route_import_csv->route_url}}</p>
                @if(($route_import_csv->controller != ""))
                    <p>controller:       {{$route_import_csv->controller}}</p>
                @endif
                @if(($route_import_csv->get_method != ""))
                    <p>get_method:       {{$route_import_csv->get_method}}</p>
                @endif
                @if(($route_import_csv->get_helper_name != ""))
                    <p>get_helper_name:      {{$route_import_csv->get_helper_name}}</p>
                @endif
                @if(($route_import_csv->middleware != ""))
                    <p>middleware:       {{$route_import_csv->middleware}}</p>
                @endif
                @if(($route_import_csv->post_method != ""))
                    <p>post_method:      {{$route_import_csv->post_method}}</p>
                @endif
                @if(($route_import_csv->post_helper_name != ""))
                    <p>post_helper_name: {{$route_import_csv->post_helper_name}}</p>
                @endif
                @if(($route_import_csv->model != ""))
                    <p>model:            {{$route_import_csv->model}}</p>
                @endif
                @if(($route_import_csv->table_name != ""))
                    <p>table_name:       {{$route_import_csv->table_name}}</p>
                @endif
            </p>
            <iframe src="{{route($route_import_csv->get_helper_name)}}"></iframe>
        @endforeach
    @endif






    {{--
    @if(isset($route_import_csvs))
        @foreach($route_import_csvs as $route_import_csv)
            <p>
                <h2>{{$route_import_csv->view_file_name}}</h2>
                <a href="{{route($route_import_csv->helper_name)}}">{{$route_import_csv->view_file_name}}</a>
                <p>route_url:   {{$route_import_csv->route_url}}</p>
                <p>controller:  {{$route_import_csv->controller}}</p>
                <p>method:      {{$route_import_csv->method}}</p>
                <p>helper_name: {{$route_import_csv->helper_name}}</p>
                <p>middleware:  {{$route_import_csv->middleware}}</p>
            </p>
            <iframe src="{{route($route_import_csv->helper_name)}}"></iframe>
        @endforeach
    @endif
    --}}




    
    
</div>
