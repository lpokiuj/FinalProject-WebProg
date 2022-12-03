<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @foreach ($actors as $actor)
        <p>Name: {{ $actor->name }}</p>
        <p>Gender: {{ $actor->gender }}</p>
        <img src="/image/actor.{{ $actor->image }})" alt="">
    @endforeach

</body>
</html>
