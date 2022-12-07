@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="container" style="padding: 2rem 0;">
        <div class="row flex-wrap">
            <div class="col-md-4">
                <img src="{{url($actor->image)}}" style="height: 30rem;" alt="">
                <div>
                    <h4 class="text-white" style="margin: 1.5rem 0;">Personal Info</h4>
                    <h6 class="sub">Popularity</h6>
                    <div class="sub-desc">{{$actor->popularity}}</div>
                    <h6 class="sub">Gender</h6>
                    <div class="sub-desc">{{$actor->gender}}</div>
                    <h6 class="sub">Birthday</h6>
                    <div class="sub-desc">{{$actor->DOB}}</div>
                    <h6 class="sub">Place of Birth</h6>
                    <div class="sub-desc">{{$actor->POB}}</div>
                </div>
            </div>
            <div class="col-8">
                <h1 class="text-white">{{$actor->name}}</h1>
                <h4 class="sub">Biography</h4>
                <div class="text-white">{{$actor->biography}}</div>
                <h4 class="sub">Known For</h4>
                @foreach($actor->movies as $movie)
                    <a href="#" class="card p-2 m-2" style="width: 15rem; text-decoration:none;cursor: pointer; background-color: #2B2B2B">
                        <img src="{{url($movie->thumbnail)}}" style="height: 18rem; object-fit: cover;" alt="">
                        <div class="card-body p-0">
                            <div class="text-white" style="margin: 0.5rem 0 0.3rem 0;">{{$movie->title}}</div>
                        </div>
                    </a>
                @endforeach
                
            </div>
        </div>

        
    </div>
    <style>
        .sub-desc{
            margin-top: -0.5rem;
            color: #4A4B50;
        }
        .card:hover{
            border: 1px solid red;
        }
        .sub{
            margin-top: 0.5rem;
            color: white;
        }
    </style>
@endsection