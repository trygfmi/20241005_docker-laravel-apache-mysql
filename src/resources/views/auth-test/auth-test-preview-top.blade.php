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


    
    <p>
        <h2>auth-test</h2>
        <a href="{{route('auth-test')}}">auth-test</a>
    </p>
    <iframe src="{{route('auth-test')}}"></iframe>



    <p>
        <h2>auth-test-name-email</h2>
        <a href="{{route('auth-test-name-email')}}">auth-test-name-email</a>
    </p>
    <iframe src="{{route('auth-test-name-email')}}"></iframe>



    <p>
        <h2>edit-user-information</h2>
        <a href="{{route('edit-user-information')}}">edit-user-information</a>
    </p>
    <iframe src="{{route('edit-user-information')}}"></iframe>



    <p>
        <h2>delete-user</h2>
        <a href="{{route('delete-user')}}">delete-user</a>
    </p>
    <iframe src="{{route('delete-user')}}"></iframe>



    <p>
        <h2>auth-test-create</h2>
        <a href="{{route('auth-test-create')}}">auth-test-create</a>
    </p>
    <iframe src="{{route('auth-test-create')}}"></iframe>




</div>
