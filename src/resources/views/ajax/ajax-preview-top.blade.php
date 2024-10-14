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


    
    <p>
        <h2>index-ajax-hello</h2>
        <a href="{{route('index-ajax-hello')}}">index-ajax-hello</a>
    </p>
    <iframe src="{{route('index-ajax-hello')}}"></iframe>



    <p>
        <h2>ajax-hello</h2>
        <a href="{{route('ajax-hello')}}">ajax-hello</a>
    </p>
    <iframe src="{{route('ajax-hello')}}"></iframe>



    <p>
        <h2>import-foreign-id-pokemon</h2>
        <a href="{{route('index-import-foreign-id-pokemon')}}">import-foreign-id-pokemon</a>
    </p>
    <iframe src="{{route('index-import-foreign-id-pokemon')}}"></iframe>



    <p>
        <h2>show-foreign-id-pokemon</h2>
        <a href="{{route('show-foreign-id-pokemon')}}">show-foreign-id-pokemon</a>
    </p>
    <iframe src="{{route('show-foreign-id-pokemon')}}"></iframe>



    <p>
        <h2>ajax-import-foreign-id-pokemon</h2>
        <a href="{{route('ajax-import-foreign-id-pokemon')}}">ajax-import-foreign-id-pokemon</a>
    </p>
    <iframe src="{{route('ajax-import-foreign-id-pokemon')}}"></iframe>




</div>
