cd src
php artisan make:view $1
cd ..

sed -i '' '3i\
\
' src/resources/views/$1.blade.php
sed -i '' '3i\
    @if ($skills)\
        @foreach ($skills as $skill)\
            <p>{{$skill->id}} {{$skill->sub_skill}</p>\
        @endforeach\
    @endif\' src/resources/views/$1.blade.php
