<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    @if ($errors->any())
        <h1>Error</h1>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    @endif


    <form action="/actors" method="POST" enctype="multipart/form-data" style="display: flex; flex-direction:column">
        @csrf
        <label for="name">Name</label>
        <input type="text" name="name" id="">
        <label for="gender">Gender</label>
        <input type="text" name="gender" id="">
        <label for="biography">biography</label>
        <input type="text" name="biography" id="">
        <label for="DOB">DOB</label>
        <input type="date" name="DOB" id="">
        <label for="POB">POB</label>
        <input type="text" name="POB" id="">
        <label for="image">Image</label>
        <input type="file" name="image" id="">
        <label for="popularity">popularity</label>
        <input type="number" name="popularity" id="">

        <button type="submit">Submit</button>
    </form>
</body>
</html>
