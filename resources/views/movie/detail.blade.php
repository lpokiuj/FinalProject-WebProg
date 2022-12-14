@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')

<style>
    .heading{
        background-repeat: no-repeat;
            height: 700px;
            background-size: cover;
            object-fit: cover;
            background-position-x: center;
            background-position-y: center;
            background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)), url("{{url('storage/'.$movie->background)}}");
        }
        .container{
            color: white;
        }
        .sub{
            margin-top: 0.5rem;
            color: white;
        }

        button{
            border: none;
            background-color: red;
        }
</style>
<div class="heading d-flex align-items-center">
    <div class="container">
        @guest
        @else
            @if(auth()->user()->isAdmin)
            <div class="row">
                <a href="/movies/{{$movie->id}}/edit" class="text-white d-flex justify-content-center py-2" style="background-color: red; margin-bottom: 0.5rem; border-style: none; border-radius: 5px; text-decoration: none; ">Edit</a>
                <form class="d-flex justify-content-center flex-column py-2" action="/movies/{{$movie->id}}" method="POST" enctype="multipart/form-data" style="background-color: red; margin-bottom: 1rem; border-style: none; border-radius: 5px; text-decoration: none; ">
                    @method('DELETE')
                    @csrf
                    <button class="text-white" type="submit">Remove</button>
                </form>
            </div>
            @endif
        @endguest        
        
        <div class="row">
            <div class="col-md-4 "><img style="height: 30rem; width: 20rem; object-fit: cover;" src="{{url('storage/'.$movie->thumbnail)}}" alt="" srcset=""></div>
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
                <h6 class="card-title my-2 " style="color: #4A4B50;">{{$actor->pivot->charName}}</h6>
            </div>
        </a>
        @endforeach
    </div>
    <div class="row mt-5">
    <h4 style="border-left: 4px solid red; padding-left: 1rem;">More</h4>
    </div>
    <div class="row">
        @foreach($moreMovies as $movie)
        <div  class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #121117;">
                    <a href="/movies/{{$movie->id}}" style="height: 20rem;">
                        <img src="{{url('storage/'.$movie->thumbnail)}}" style="object-fit: cover; height: 19.5rem; width: 14rem;" alt="">
                    </a>
                    <div class="card-body p-0">
                        <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                        <div class="d-flex justify-content-between justify-content-center">
                            <div class="" style="margin: 0rem 0 0.3rem 0; color: #4A4B50;">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                            <!-- UNDER CONSTRUCTION -->
                            @guest
                            @else
                                @if(auth()->user()->isAdmin)
                                @else
                                @php
                                    $flag = 0;
                                @endphp
                                @foreach($movie->users as $user)
                                    @if($user->id == auth()->id())
                                        @php
                                            $flag = 1;
                                        @endphp
                                    @endif
                                @endforeach
                                @if($flag == 1)
                                    <form action="/watchlists/{{$movie->id}}" method="POST" enctype="multipart/form-data">
                                        @method('DELETE')
                                        @csrf
                                        <input type="hidden" name="movieID" value="{{$movie->id}}">
                                        <button type="submit" style="border: none; background-color: #121117;">
                                            <img src="/assets/check-mark.svg" alt="" style="filter: invert(10%) sepia(80%) saturate(5737%) hue-rotate(8deg) brightness(93%) contrast(119%);">
                                        </button>
                                     </form>
                                    @else
                                    <form action="/watchlists" method="POST" enctype="multipart/form-data">
                                        @csrf
                                        <input type="hidden" name="movieID" value="{{$movie->id}}">
                                        <button type="submit" style="border: none; background-color: #121117;">
                                            <img src="/assets/home/plus.svg" style="filter: invert(80%) sepia(36%) saturate(6560%) hue-rotate(62deg) brightness(109%) contrast(126%); height: 15px;" alt="">
                                        </button>
                                     </form>
                                @endif
                                @endif
                            @endguest
                            <!--END UNDER CONSTRUCTION -->
                        </div>
                    </div>
                </div>
        @endforeach
    </div>
</div>

@endsection