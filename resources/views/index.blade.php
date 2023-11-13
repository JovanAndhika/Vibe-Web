<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    @foreach($musics as $m)
        <h1>{{ $m->title }}</h1>
        <p>{{ $m->artist }}</p>
        <p>{{ $m->genre }}</p>
    @endforeach
</body>
</html>