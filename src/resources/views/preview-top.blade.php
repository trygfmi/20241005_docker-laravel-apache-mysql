<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- Smile, breathe, and go slowly. - Thich Nhat Hanh -->
    @if(isset($preview_route_tops))
        @foreach($preview_route_tops as $preview_route_top)
            <p>
                <h2>{{$preview_route_top->view_file_name}}</h2>
                <a href="{{route($preview_route_top->helper_name)}}">{{$preview_route_top->view_file_name}}</a>
                <p>route_url:   {{$preview_route_top->route_url}}</p>
                <p>helper_name: {{$preview_route_top->helper_name}}</p>
                <p>route_file:  {{$preview_route_top->route_file}}</p>
            </p>
            <iframe src="{{route($preview_route_top->helper_name)}}"></iframe>
        @endforeach
    @endif
    <p>
        <h2>web-preview-top</h2>
        <a href="{{route('web-preview-top')}}">web-preview-top</a>
    </p>
    <iframe src="{{route('web-preview-top')}}"></iframe>



    <p>
        <h2>pokemon-sleep-preview-top</h2>
        <a href="{{route('pokemon-sleep-preview-top')}}">pokemon-sleep-preview-top</a>
    </p>
    <iframe src="{{route('pokemon-sleep-preview-top')}}"></iframe>



    <p>
        <h2>test-preview-top</h2>
        <a href="{{route('test-preview-top')}}">test-preview-top</a>
    </p>
    <iframe src="{{route('test-preview-top')}}"></iframe>



    <p>
        <h2>ajax-preview-top</h2>
        <a href="{{route('ajax-preview-top')}}">ajax-preview-top</a>
    </p>
    <iframe src="{{route('ajax-preview-top')}}"></iframe>



    <p>
        <h2>auth-test-preview-top</h2>
        <a href="{{route('auth-test-preview-top')}}">auth-test-preview-top</a>
    </p>
    <iframe src="{{route('auth-test-preview-top')}}"></iframe>



    <p>
        <h2>import-csv-preview-top</h2>
        <a href="{{route('import-csv-preview-top')}}">import-csv-preview-top</a>
    </p>
    <iframe src="{{route('import-csv-preview-top')}}"></iframe>



</div>
