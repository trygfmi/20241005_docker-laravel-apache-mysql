<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Document</title>
</head>
<body>
    <div>
    <!-- People find pleasure in different ways. I find it in keeping my mind clear. - Marcus Aurelius -->
        <p>hello home</p>
    </div>

    <div>
        @foreach ($users as $user)
            <li>{{$user->name}} ({{$user->email}})</li>
        @endforeach
    </div>
</body>
</html>


