@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
<div class="heading d-flex align-items-center">
    <div class="container">
        <div class="row">
            <button class="text-white d-flex justify-content-center py-2" style="background-color: red; margin-bottom: 0.5rem; border-style: none; border-radius: 5px;">Edit</button>
            <button class="text-white d-flex justify-content-center py-2" style="background-color: red; margin-bottom: 1rem; border-style: none; border-radius: 5px;">Remove</button>
        </div>
        <div class="row">
            <div class="col-md-4 "><img style="height: 30rem;" src="{{url('storage/'.$movie->thumbnail)}}" alt="" srcset=""></div>
            <div class="col-md-8">
                <h1>{{$movie->title}}</h1>
                <div class="d-flex align-items-center">
                    @foreach($movie->genres as $genre)
                        <div class="border rounded-3 px-2 me-2" style="filter: brightness(70%);">{{$genre->genreName}}</div>
                    @endforeach
                </div>
                <h4 class="sub">Release Year</h4>
                <div class="sub-desc">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                <h4 class="sub">Storyline</h4>
                <div class="sub-desc">{{$movie->description}}</div>
                <h4 class="sub">Director</h4>
                <div class="sub-desc">{{$movie->director}}</div>
            </div>
        </div>
    </div>
</div>
<div class="container" style="margin-top: 2rem;">
    <div class="row">
        <h4 style="border-left: 4px solid red; padding-left: 1rem;">Cast</h4>
    </div>
    <div class="row">
        <!-- actor that played in the movie -->
        @foreach($movie->actors as $actor)
        <a href="/actors/{{$actor->id}}" class="card p-2 m-2" style="width: 15rem; text-decoration: none;cursor: pointer; background-color: #1F1F1F;">
            <img src="{{url('storage/'.$actor->image)}}" style="height: 18rem; object-fit: cover;" alt="">
            <div class="card-body p-0">
                <h5 class="card-title my-2 text-white">{{$actor->name}}</h5>
            </div>
        </a>
        @endforeach
    </div>
    <div class="row mt-5">
    <h4 style="border-left: 4px solid red; padding-left: 1rem;">More</h4>
    </div>
    <div class="row">
        @foreach($moreMovies as $movie)
            <a href="/movies/{{$movie->id}}" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #121117;">
                <img src="{{url('storage/'.$movie->thumbnail)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                    <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                    <div class="" style="margin: 0rem 0 0.3rem 0; color: #4A4B50;">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                </div>
            </a>
        @endforeach
    </div>
</div>

<style>
    .heading{
        background-repeat: no-repeat;
            height: 700px;
            background-size: cover;
            object-fit: cover;
            background-position-x: center;
            background-position-y: center;
            background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("{{url('storage/'.$movie->thumbnail)}}");
            /* background-image:url({{url('images/php_mysql.jpg')}}) */
        }
        .container{
            color: white;
        }
        .sub{
            margin-top: 0.5rem;
            color: white;
        }
</style>
@endsection