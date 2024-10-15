<div>
    <!-- Always remember that you are absolutely unique. Just like everyone else. - Margaret Mead -->
    <form action="{{route('create-ajax-preview-top')}}" method="post" >
        @csrf
        <p>
            <label>
                view_file_name
                <input type="text" name="view_file_name" required autofocus >
            </label>
        </p>

        <p>
            <label>
                route_url
                <input type="text" name="route_url" required >
            </label>
        </p>

        <p>
            <label>
                controller
                <input type="text" name="controller" >
            </label>
        </p>

        <p>
            <label>
                get_method
                <input type="text" name="get_method" >
            </label>
        </p>

        <p>
            <label>
                get_helper_name
                <input type="text" name="get_helper_name" >
            </label>
        </p>

        <p>
            <label>
                middleware
                <input type="text" name="middleware" >
            </label>
        </p>

        <p>
            <label>
                post_method
                <input type="text" name="post_method" >
            </label>
        </p>

        <p>
            <label>
                post_helper_name
                <input type="text" name="post_helper_name" >
            </label>
        </p>

        <p>
            <label>
                model
                <input type="text" name="model" >
            </label>
        </p>

        <p>
            <label>
                table_name
                <input type="text" name="table_name" >
            </label>
        </p>


        <button type="submit">登録</button>
    </form>


    @if(session('message'))
        {{session('message')}}
    @endif
    
</div>
