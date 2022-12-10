@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
<div>
    <!-- Corousel Showcase -->
    <div class="row" style="height: 700px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <div class="heading d-flex align-items-center text-white">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div>
                                    <div class="d-flex align-items-center" style="margin-top: 10rem;">
                                        <div class="me-2">{{$movies[0]->genres->first()->genreName}}</div>
                                        <div class="ps-2" style="border-left: 3px solid white;">{{ date('Y', strtotime($movies[0]->releaseDate))}}</div>
                                    </div>
                                    <h1>{{$movies[0]->title}}</h1>
                                    <div style="width: 50%; height: 100px; text-overflow: ellipsis; overflow: hidden; display: -webkit-box !important;-webkit-line-clamp:4; -webkit-box-orient: vertical; white-space: normal;">{{$movies[0]->description}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="heading d-flex align-items-center text-white">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div>
                                    <div class="d-flex align-items-center" style="margin-top: 10rem;">
                                        <div class="me-2">{{$movies[0]->genres->first()->genreName}}</div>
                                        <div class="ps-2" style="border-left: 3px solid white;">{{ date('Y', strtotime($movies[0]->releaseDate))}}</div>
                                    </div>
                                    <h1>{{$movies[0]->title}}</h1>
                                    <div style="width: 50%; height: 100px; text-overflow: ellipsis; overflow: hidden; display: -webkit-box !important;-webkit-line-clamp:4; -webkit-box-orient: vertical; white-space: normal;">{{$movies[0]->description}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <div class="heading d-flex align-items-center text-white">
                        <div class="container">
                            <div class="row d-flex justify-content-center">
                                <div>
                                    <div class="d-flex align-items-center" style="margin-top: 10rem;">
                                        <div class="me-2">{{$movies[0]->genres->first()->genreName}}</div>
                                        <div class="ps-2" style="border-left: 3px solid white;">{{ date('Y', strtotime($movies[0]->releaseDate))}}</div>
                                    </div>
                                    <h1>{{$movies[0]->title}}</h1>
                                    <div style="width: 50%; height: 100px; text-overflow: ellipsis; overflow: hidden; display: -webkit-box !important;-webkit-line-clamp:4; -webkit-box-orient: vertical; white-space: normal;">{{$movies[0]->description}}</div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="container">
        <!-- Popular -->
        <div class="row" style="margin-top: 2rem;">
            <div class="d-flex align-items-center">
                <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); height: 2rem;" class="me-2" src="/assets/home/popular.svg" alt="">
                <h3 class="text-white">Popular</h3>
            </div>
            @foreach($movies as $movie)
            <a href="/movies/{{$movie->id}}" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #121117;">
                <img src="{{url('storage/'.$movie->thumbnail)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                    <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                    <div class="" style="margin: 0rem 0 0.3rem 0; color: #4A4B50;">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                </div>
            </a>
            @endforeach
        </div>
        <!-- Searching -->
        <div class="row" style="margin-top: 2rem;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); height: 2rem;" class="me-2" src="/assets/home/show.svg" alt="">
                    <h3 class="text-white">Show</h3>
                </div>
                <div class="d-flex align-items-center">
                    <form class="form-inline my-2 my-lg-0" style="padding: 0 2rem;" action="/movies">
                        <input type="hidden" name="genre" value="{{ request('genre', '') }}">
                        <input type="hidden" name="sort" value="{{ request('sort', '') }}">
                        <input class="form-control mr-sm-2 py-2" style="background-color: #2B2B2B; color:white" type="search" placeholder="Search Movies Name.." aria-label="Search Movies" name="search" value="{{ request('search') }}">
                        <input type="submit" style="display: none">
                    </form>
                </div>
            </div>
        </div>
        <!-- Genre -->
        <div class="row" style="padding: 1rem 0;">
            <div class="d-flex">
                @foreach($genres as $genre)
                <a href="{{ request()->fullUrlWithQuery(['genre' => $genre->genreName]) }}" class="card me-3 py-2 px-4 d-flex justify-content-center text-white" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" class="text-white">{{$genre->genreName}}</a>
                @endforeach
            </div>
        </div>
        <!-- Sorting -->
        <div class="row">
            <div class="d-flex align-items-center">
                <div class="text-white me-3">Sort by: </div>
                <a class="card me-3 py-1 px-4 d-flex justify-content-center text-white py-2" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer; " href="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}">Latest</a>
                <a class="card me-3 py-1 px-4 d-flex justify-content-center text-white py-2" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" href="{{ request()->fullUrlWithQuery(['sort' => 'ascending']) }}">A-Z</a>
                <a class="card me-3 py-1 px-4 d-flex justify-content-center text-white py-2" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" href="{{ request()->fullUrlWithQuery(['sort' => 'descending']) }}">Z-A</a>
            </div>
        </div>
        <!-- Add Movie Button-->
        <div class="row">
            <div class="d-flex justify-content-end" style="padding: 0 2rem;">
                <a href="/movies/create" class="text-white me-3 py-2 px-4" style="background-color: red; border-style: none; border-radius: 5px; text-decoration: none;">
                    <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); margin-left: -0.5rem" src="/assets/home/plus.svg" alt="">
                    Add Movie
                </a>
            </div>
        </div>
        <!-- List Movie -->
        <div class="row">
            @foreach($queriedMovies as $movie)
            <a href="#" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #121117;">
                <img src="{{url('storage/'.$movie->thumbnail)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                    <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                    <div class="" style="margin: 0rem 0 0.3rem 0; color: #4A4B50;">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                </div>
            </a>
            @endforeach
        </div>

        <div class="row">
            <div class="d-flex justify-content-center">
                {{ $queriedMovies->links()}}
            </div>
        </div>
        <!-- <div class="row">
            <div class="d-flex justify-content-center" >
                {{ $queriedMovies->links('movie.pagination')}}
            </div>
        </div> -->
    </div>
</div>

<style>
    .pagination li a {
        background-color: #1F1F1F;
        color: white;
    }

    .pagination{
        --bs-pagination-active-bg: red;
        --bs-pagination-active-border-color: red;
    }

    .page-item:active .page-link{
        background-color: red;
        color: white;
    }

    .heading {
        background-repeat: no-repeat;
        height: 700px;
        background-size: cover;
        object-fit: cover;
        background-position-x: center;
        background-position-y: center;
        background-image:linear-gradient(rgba(0, 0, 0, 0.60), rgba(0, 0, 0, 0.60)),
        url("{{url('storage/'.$movies[0]->thumbnail)}}");
        /* background-image:url({{url('images/php_mysql.jpg')}}) */
    }

    .carousel-indicators button.active{
        background-color: red;
    }

    

</style>
@endsection