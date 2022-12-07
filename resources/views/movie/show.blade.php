@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div>{{$movie->title}}</div>
    @foreach($movie->genres as $genre)
        <div>{{$genre->genreName}}</div>
    @endforeach
@endsection