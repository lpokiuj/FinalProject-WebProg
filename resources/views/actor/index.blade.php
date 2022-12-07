@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="d-flex justify-content-center flex-wrap flex-column p-5" style="margin: 0 10rem">
    <div class="d-flex flex-row justify-content-between">
        <h2 style="color: red;">Actor</h2>
        <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" style="background-color: #2B2B2B; color:white" type="search" placeholder="Search Actor Name.." aria-label="Search Actor">
        </form>
    </div>
        <div class="d-flex flex-wrap">
        @foreach ($actors as $actor)
            <a href="/actors/{{$actor->id}}" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer;">
                <img src="{{url($actor->image)}}" style="height: 18rem; object-fit: cover;" alt="">
                <div class="card-body p-0">
                <h5 class="card-title my-2 text-white">{{ $actor->name }}</h5>
                <h6 class="desc">{{$actor->movies->first()->title}}</h6>
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