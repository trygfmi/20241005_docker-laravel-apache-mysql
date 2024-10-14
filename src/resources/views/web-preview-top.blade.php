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
                <a href="{{route($route_web->helper_name)}}">{{$route_web->view_file_name}}</a>
                <p>route_url:   {{$route_web->route_url}}</p>
                <p>controller:  {{$route_web->controller}}</p>
                <p>method:      {{$route_web->method}}</p>
                <p>helper_name: {{$route_web->helper_name}}</p>
                <p>middleware:  {{$route_web->middleware}}</p>
            </p>
            <iframe src="{{route($route_web->helper_name)}}"></iframe>
        @endforeach
    @endif


    
    <p>
        <h2>welcome</h2>
        <a href="{{route('welcome')}}">welcome</a>
    </p>
    <iframe src="{{route('welcome')}}"></iframe>



    <p>
        <h2>dashboard</h2>
        <a href="{{route('dashboard')}}">dashboard</a>
    </p>
    <iframe src="{{route('dashboard')}}"></iframe>



    <p>
        <h2>profile</h2>
        <a href="{{route('profile.edit')}}">profile</a>
    </p>
    <iframe src="{{route('profile.edit')}}"></iframe>



    <p>
        <h2>show-users</h2>
        <a href="{{route('show-users')}}">show-users</a>
    </p>
    <iframe src="{{route('show-users')}}"></iframe>



    <p>
        <h2>create-table</h2>
        <a href="{{route('create-table')}}">create-table</a>
    </p>
    <iframe src="{{route('create-table')}}"></iframe>



    <p>
        <h2>success</h2>
        <a href="{{route('success')}}">success</a>
    </p>
    <iframe src="{{route('success')}}"></iframe>



    <p>
        <h2>show-timestamp</h2>
        <a href="{{route('show-timestamp')}}">show-timestamp</a>
    </p>
    <iframe src="{{route('show-timestamp')}}"></iframe>



    <p>
        <h2>show-facade-class-name</h2>
        <a href="{{route('show-facade-class-name')}}">show-facade-class-name</a>
    </p>
    <iframe src="{{route('show-facade-class-name')}}"></iframe>



    
</div>
