@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
<div>
    <div class="container">
        <div class="row" style="height: 500px;">
            <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="false">
                <div class="carousel-indicators">
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
                    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
                </div>
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>First slide label</h5>
                            <p>Some representative placeholder content for the first slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Second slide label</h5>
                            <p>Some representative placeholder content for the second slide.</p>
                        </div>
                    </div>
                    <div class="carousel-item">
                        <img src="..." class="d-block w-100" alt="...">
                        <div class="carousel-caption d-none d-md-block">
                            <h5>Third slide label</h5>
                            <p>Some representative placeholder content for the third slide.</p>
                        </div>
                    </div>
                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="d-flex align-items-center">
                <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); height: 2rem;" class="me-2" src="assets/home/popular.svg" alt="">
                <h3 class="text-white">Popular</h3>
            </div>
            @foreach($movies as $movie)
            <a href="#" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #2B2B2B">
                <img src="{{url($movie->thumbnail)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                    <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                    <div class="" style="margin: 0rem 0 0.3rem 0; color:#4A4B50;">{{ date('Y', strtotime($movie->releaseDate))}}</div>
                </div>
            </a>
            @endforeach
        </div>
        <div class="row" style="margin-top: 2rem;">
            <div class="d-flex align-items-center justify-content-between">
                <div class="d-flex align-items-center">
                    <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); height: 2rem;" class="me-2" src="assets/home/show.svg" alt="">
                    <h3 class="text-white">Show</h3>
                </div>
                <div class="d-flex align-items-center">
                    <form class="form-inline my-2 my-lg-0" style="padding: 0 2rem;">
                    <input class="form-control mr-sm-2" style="background-color: #2B2B2B; color:white" type="search" placeholder="Search Movies Name.." aria-label="Search Movies">
                </div>
            </div>
        </div>
        <div class="row">
            @foreach($genres as $genre)
                <div class="text-white">{{$genre->genreName}}</div>
            @endforeach
        </div>
    </div>
</div>
@endsection