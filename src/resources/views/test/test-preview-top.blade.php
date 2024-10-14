<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- An unexamined life is not worth living. - Socrates -->
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


    
    <p>
        <span>show-read-from-handler</span>
        <a href="{{route('show-read-from-handler')}}">show-read-from-handler</a>
    </p>
    <iframe src="{{route('show-read-from-handler')}}"></iframe>



    <p>
        <span>custom-dialog</span>
        <a href="{{route('custom-dialog')}}">custom-dialog</a>
    </p>
    <iframe src="{{route('custom-dialog')}}"></iframe>



    <p>
        <span>custom-alert</span>
        <a href="{{route('custom-alert')}}">custom-alert</a>
    </p>
    <iframe src="{{route('custom-alert')}}"></iframe>



    <p>
        <span>await-custom-dialog</span>
        <a href="{{route('await-custom-dialog')}}">await-custom-dialog</a>
    </p>
    <iframe src="{{route('await-custom-dialog')}}"></iframe>



    
</div>
