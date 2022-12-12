@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="container">
        
        <div class="row">
            <h1 class="text-white my-5">Edit Actor</h1>
        </div>
        <div class="row text-danger" style="margin-top: -2rem;">
            @if ($errors->any())
            <h4>Error</h4>
            <ul class="ps-5">
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
            @endif 
        </div>
        <div class="row">
            <form action="/actors/{{$actor->id}}" method="POST" enctype="multipart/form-data" class="text-white" style="display: flex; flex-direction:column">
                @method('PUT')
                @csrf
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{$actor->name}}">
                <label for="gender">Gender</label>
                <select class="form-select" name="gender" id="gender">
                    <option selected="selected" value="">{{$actor->gender}}</option>
                    <option value="1">Male</option>
                    <option value="2">Female</option>
                </select>
                <label for="biography">Biography</label>
                <textarea type="text" style="height: 150px;" name="biography" id="">{{$actor->biography}}</textarea>
                <label for="DOB">Date Of Birth</label>
                <input type="date" name="DOB" id="" value="{{$actor->DOB}}">
                <label for="POB">Place Of Birth</label>
                <input type="text" name="POB" id="" value="{{$actor->POB}}">
                <label for="image">Image URL</label>
                <input type="file" name="image" id="" value="{{$actor->image}}">
                <label for="popularity">Popularity</label>
                <input type="number" name="popularity" id="" value="{{$actor->popularity}}">

                <button class="text-white" style="margin-top: 0.5rem; background-color: red; border: none; border-radius: 5px; padding: 0.5rem; margin-bottom: 2rem;" type="submit">Edit</button>
            </form>
        </div>
    </div>
    <style>
        input, textarea, .form-select{
            background-color: #1F1F1F;
            border-style: none;
            border-radius: 5px;
            padding: 0.5rem;
            margin: 0.3rem 0;
            color: white;
            /* background-color: white; */
        }

        input img{
            filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%)
        }
        label{
            margin-top: 0.5rem;
        }
    </style>
@endsection
