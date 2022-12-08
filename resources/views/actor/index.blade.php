@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="d-flex justify-content-center flex-wrap flex-column p-5" style="margin: 0 10rem">
    <div class="d-flex flex-row justify-content-between">
        <h2 style="color: red;">Actor</h2>
        <div class="d-flex align-items-center">
            <div>
                <form class="form-inline my-2 my-lg-0 pe-2">
                <input class="form-control mr-sm-2" style="background-color: #2B2B2B; color:white" type="search" placeholder="Search Actor Name.." aria-label="Search Actor">
            </div>
            <div>
                <a href="/actors/create" class="text-white me-3 py-2 px-4" style="background-color: red; border-style: none; border-radius: 5px; text-decoration: none;">
                    <img style="filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%); margin-left: -0.5rem" src="/assets/home/plus.svg" alt="">
                    Add Actors
                </a>
            </div>
        </div>
        
        </form>
    </div>
        <div class="d-flex flex-wrap">
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
    </div>
    <style>
        .card{
            background-color: #2B2B2B;
        }
        .card:hover{
            border: 1px solid red;
        }
        .desc{
            color: #4A4B50;;
        }
    </style>
@endsection