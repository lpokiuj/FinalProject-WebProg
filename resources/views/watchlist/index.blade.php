@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
<!-- UNDER CONSTRUCTION -->
<style>
    .modal-content{
        background-color: #2B2B2B;
    }

    .modal-header{
        border-bottom: none;
    }

    .modal-footer{
        border-top: none;
    }

    .save{
        background-color: red;
    }
    
</style>
<div class="container py-5" style="min-height: 800px;">
    <div class="row text-white">
        <h1>My Watchlist</h1>
    </div>
    <div class="row mt-3">
        <form class="form-inline my-lg-0" action="/watchlists">
            <input class="form-control mr-sm-2 py-3" style="background-color: #2B2B2B; color:white;" type="search" placeholder="Search Movies Name.." aria-label="Search Movies" name="search" value="{{ request('search') }}">
            <input type="submit" style="display: none">
        </form>
    </div>
    <div class="row mt-4">
        <form action="/watchlists">
            <img src="/assets/watchlist/filter.svg" alt="" style="filter: invert(100%) sepia(93%) saturate(0%) hue-rotate(48deg) brightness(103%) contrast(104%);">
            <select name="status" class="text-white p-1 ms-2" style="background-color: #121117; border: none; cursor: pointer;">
                <option value="All" selected>All</option>
                <option value="Planned">Planned</option>
                <option value="Watching">Watching</option>
                <option value="Finished">Finished</option>
            </select>
        </form>
    </div>
    <div class="row mt-4 text-white" style="filter: brightness(50%);">
        <h4 class="col-md-3">Poster</h4>
        <h4 class="col-md-4" style="padding-left: 0;">Title</h4>
        <h4 class="col-md-3" style="padding-left: 0;">Status</h4>
        <h4 class="col-md-2 d-flex justify-content-center" style="padding-left: 0;">Action</h4>
    </div>
    @php
        $i=1
    @endphp
    @foreach($watchlists as $list)
    <div class="row mt-4 mx-1 text-white d-flex align-items-center" style="background-color: #2B2B2B;">
        <div class="col-md-3 d-flex" style="padding-left: 0;">
            <img src="{{url('storage/'.$list->movie->thumbnail)}}" alt="" srcset="" style="height: 300px; width: 200px; object-fit: cover;">
        </div>
        <div class="col-md-4">{{$list->movie->title}}</div>
        @if($list->status=='Planned')
            <div class="col-md-3" style="color: #32FF00;">{{$list->status}}</div>
        @elseif($list->status=='Watching')
            <div class="col-md-3" style="color: yellow;">{{$list->status}}</div>
        @elseif($list->status=='Finished')
            <div class="col-md-3" style="color: red;">{{$list->status}}</div>            
        @endif
        <a class="col-md-2 d-flex justify-content-center" href="#">
            <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal{{$list->id}}">
                <img src="/assets/watchlist/more-horizontal.svg" alt="" style="filter: invert(100%) sepia(93%) saturate(0%) hue-rotate(48deg) brightness(103%) contrast(104%);">
            </button>
            <div class="modal fade" id="exampleModal{{$list->id}}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Change Status</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <form action="/watchlists/{{$list->movie->id}}" id="editStatus{{$i}}" method="POST" class="row">
                                @csrf
                                @method('PUT')
                                <select name="status" class="text-white py-2" style="background-color: #121117; border: none; cursor: pointer; border-radius: 5px;">
                                    <option value="Remove">Remove</option>
                                    <option value="Planned">Planned</option>
                                    <option value="Watching">Watching</option>
                                    <option value="Finished">Finished</option>
                                </select>
                                <input type="hidden" value="{{$list->movie->id}}">
                            </form>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="submit" form="editStatus{{$i}}" class="btn btn-danger save">Save changes</button>
                        </div>
                    </div>
                </div>
            </div>
        </a>
    </div>
    @php
        $i++
    @endphp
    @endforeach
</div>
<!-- END UNDER CONSTRUCTION -->
@endsection