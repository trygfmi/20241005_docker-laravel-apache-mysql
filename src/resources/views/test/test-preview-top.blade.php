<style>
    iframe{
        width: 80vw;
        height: 400px;
    }
</style>



<div>
    <!-- An unexamined life is not worth living. - Socrates -->
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
