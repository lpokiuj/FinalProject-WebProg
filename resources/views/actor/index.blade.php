@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="container d-flex flex-column py-5" style="min-height: 800px;">
        <div class="row d-flex justify-content-between">
            <h1 class="text-white">Actor</h1>
        </div>
        <div class="row mt-3">
            <form class="form-inline my-lg-0" action="/actors">
                <input class="form-control mr-sm-2 py-3" style="background-color: #2B2B2B; color:white;" type="search" placeholder="Search Actor Name.." aria-label="Search Actor" name="search" value="{{ request('search') }}">
                <input type="submit" style="display: none">
            </form>
        </div>
        @guest
        @else
            @if(auth()->user()->isAdmin)
            <div class="row my-4 d-flex flex-row-reverse">
                <div class="col-md-3 d-flex flex-row-reverse">
                    <a href="/actors/create" class="text-white me-3 py-2 px-4" style="background-color: red; border-style: none; border-radius: 5px; text-decoration: none;">
                        <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); margin-left: -0.5rem" src="/assets/home/plus.svg" alt="">
                        Add Actors
                    </a>
                </div>
            </div>
            @else
            @endif
        @endguest
        
        <div class="row d-flex flex-wrap mt-3">
        @foreach ($actors as $actor)
            <a href="/actors/{{$actor->id}}" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer;">
                <img src="{{url('storage/'.$actor->image)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                <h5 class="card-title my-2 text-white">{{ $actor->name }}</h5>
                @if($actor->movies()->exists())
                    <h6 class="desc">{{$actor->movies->first()->title}}</h6>
                @else
                    <h6 class="desc">No Movies</h6>
                @endif
                </div>
            </a>
        @endforeach
        </div>
        <div class="row mt-5">
            <div class="d-flex justify-content-center">
                {{ $actors->links()}}
            </div>
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
        .card{
            background-color: #2B2B2B;
        }
        .card:hover{
            border: 1px solid red;
        }
        .desc{
            color: #4A4B50;
        }
    </style>
@endsection