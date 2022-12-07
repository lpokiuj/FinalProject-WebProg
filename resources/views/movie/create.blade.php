@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
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
        <label for="name">Title</label>
        <input type="text" name="title" id="">
        <label for="gender">Description</label>
        <input type="text" name="description" id="">
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
@endsection