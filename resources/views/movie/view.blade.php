@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
<div>
    <!-- Corousel Showcase -->
    <div class="row" style="height: 500px;">
        <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-indicators">
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
                <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
            </div>
            <div class="carousel-inner">
                 <!-- @foreach($movies as $movie)
                        <div class="carousel-item active">
                            <img src="{{url($movie->thumbnail)}}" style="height: 500px; object-fit: cover;" class="d-block w-100" alt="...">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                @endforeach -->
                <div class="carousel-item active">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
                <div class="carousel-item">
                <img src="..." class="d-block w-100" alt="...">
                </div>
            </div>
            <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Previous</span>
            </button>
            <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="visually-hidden">Next</span>
            </button>
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
                        <input class="form-control mr-sm-2" style="background-color: #2B2B2B; color:white" type="search" placeholder="Search Movies Name.." aria-label="Search Movies" name="search" value="{{ request('search') }}">
                        <input type="submit" style="display: none">
                    </form>
                </div>
            </div>
        </div>
        <!-- Genre -->
        <div class="row" style="padding: 1rem 0;">
            <div class="d-flex">
                @foreach($genres as $genre)
                    <a href="{{ request()->fullUrlWithQuery(['genre' => $genre->genreName]) }}" class="me-3 py-1 px-4 d-flex justify-content-center text-white" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" class="text-white">{{$genre->genreName}}</a>
                @endforeach
            </div>
        </div>
        <!-- Sorting -->
        <div class="row">
            <div class="d-flex">
            <div class="text-white me-3">Sort by: </div>
                <a class="me-3 py-1 px-4 d-flex justify-content-center text-white" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" href="{{ request()->fullUrlWithQuery(['sort' => 'latest']) }}">Latest</a>
                <a class="me-3 py-1 px-4 d-flex justify-content-center text-white" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" href="{{ request()->fullUrlWithQuery(['sort' => 'ascending']) }}">A-Z</a>
                <a class="me-3 py-1 px-4 d-flex justify-content-center text-white" style="background-color: #2B2B2B; border-radius: 5px; text-decoration: none; cursor: pointer;" href="{{ request()->fullUrlWithQuery(['sort' => 'descending']) }}">Z-A</a>
            </div>
        </div>
        <!-- Add Movie -->
        <div class="row">
            <div class="d-flex justify-content-end" style="padding: 0 2rem;">
                <button class="text-white me-3 py-1 px-4" style="background-color: red; border-style: none; border-radius: 5px;">
                <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); margin-left: -0.5rem" src="/assets/home/plus.svg" alt="">
                Add Movie
                </button>
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
            {{ $queriedMovies->links() }}
        </div>

    </div>
</div>
@endsection
