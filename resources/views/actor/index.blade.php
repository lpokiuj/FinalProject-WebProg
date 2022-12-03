@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    @foreach ($actors as $actor)
    <div class="d-flex justify-content-center flex-wrap">
        <div class="card p-2 m-2" style="width: 18rem;">
            <img src="{{url($actor->image)}}" alt="">
            <div class="card-body p-0">
            <h5 class="card-title my-2">{{ $actor->name }}</h5>
            {{-- <h6>{{$actor->movies[0]['title']}}</h6> --}}
            </div>
        </div>
    </div>
    @endforeach
@endsection