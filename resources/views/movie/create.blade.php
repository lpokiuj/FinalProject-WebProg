@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <div class="container">
        <div class="row">
            <h1 class="text-white my-5">Add Movie</h1>
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
            <form action="/movies" method="POST" enctype="multipart/form-data" class="text-white" style="display: flex; flex-direction:column">
                @csrf
                <label for="title">Title</label>
                <input type="text" name="title" id="title">
                <label for="description">Description</label>
                <textarea type="text" style="height: 150px;" name="description" id="description"></textarea>
                <label for="genre">Genre</label>
                <div id="genreInput">
                    <select  class="form-select" name="genreID[]" id="genre">
                        <option selected="selected" value="">--Please Select Genre--</option>
                        @foreach($genres as $genre)
                            <option value="{{$genre->id}}">{{$genre->genreName}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="row d-flex mt-2 ms-1">
                    <button type="button" class="btn btn-primary" id="addMoreGenre">Add More</button>
                </div>
                
                <div id="actorInput">
                    <div style="margin-bottom: 0rm;">Select Actor</div>
                    <div class="row ps-4">
                        <div class="col-md-6 d-flex flex-column">
                        <label for="actorName">Actor</label>
                        <select class="form-select" name="actorID[]" id="actorName">
                            <option selected="selected" value="">--Please Select Actor--</option>
                            @foreach($actors as $actor)
                                <option value="{{$actor->id}}">{{$actor->name}}</option>
                            @endforeach
                        </select>
                        </div>
                        <div class="col-md-6 d-flex flex-column">
                            <label for="charName">Character Name</label>
                            <input type="text" name="charName[]" id="charName">
                        </div>
                    </div>
                </div>
                <div class="row d-flex mt-2" style="padding-left: 2.1rem;">
                    <button type="button" class="btn btn-primary" id="addMoreActors">Add More</button>
                </div>
                
                <label for="director">Director</label>
                <input type="text" name="director" id="director">
                <label for="releaseDate">Release Date</label>
                <input type="date" name="releaseDate" id="releaseDate">
                <label for="image">Thumbnail URL</label>
                <input type="file" name="thumbnail" id="thumbnail">
                <label for="background">Background URL</label>
                <input type="file" name="background" id="background">
                
                <button class="text-white" style="margin-top: 0.5rem; background-color: red; border: none; border-radius: 5px; padding: 0.5rem; margin-bottom: 2rem;" type="submit">Create</button>
            </form>
        </div>
    </div>
    <style>
        input, textarea, select, .form-select{
            background-color: #1F1F1F;
            border-style: none;
            border-radius: 5px;
            padding: 0.5rem;
            margin: 0.3rem 0;
            color: white;
        }
        
        .btn{
            background-color: red;
            border: none;
            border-style: none;
        }

        .btn:hover, .btn:active{
            background-color: red;
        }

        input img{
            filter: invert(100%) sepia(98%) saturate(0%) hue-rotate(350deg) brightness(102%) contrast(103%)
        }

        label{
            margin-top: 0.5rem;
        }

        .profile{
            background-color: transparent;
        }

        .profile:hover, .profile:active{
            background-color: transparent;
        }
    </style>
    <script type="text/javascript">
        $(document).ready(function(){
            $('#addMoreActors').on('click',function(){
                let line=`
                <div class="row ps-4 d-flex align-items-end">
                    <div class="col-md-5 d-flex flex-column">
                        <label for="actorName">Actor</label>
                        <select class="form-select" name="actorID[]" id="actorName">
                            <option selected="selected" value="">--Please Select Actor--</option>
                            @foreach($actors as $actor)
                                <option value="{{$genre->id}}">{{$actor->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="col-md-5 d-flex flex-column">
                        <label for="charName">Character Name</label>
                        <input type="text" name="charName[]" id="charName">
                    </div>
                    <button type="button" style="height: 2.5rem; margin-bottom: 0.3rem;" class="deleteButton col-md-2 btn btn-primary" id="delete">Delete</button>
                </div>
                `;
                
                $('#actorInput').append(line);
            })

            $('#addMoreGenre').on('click',function(){
                let line=`
                <div class="row d-flex align-items-end justify-content-center">
                    <div class="col-md-10">
                        <select  class="form-select" name="genreID[]" id="genre">
                            <option selected="selected" value="">--Please Select Genre--</option>
                            @foreach($genres as $genre)
                                <option value="{{$genre->id}}">{{$genre->genreName}}</option>
                            @endforeach
                        </select>
                    </div>
                    <button type="button" style="height: 2.5rem; margin-bottom: 0.3rem;" class="deleteButton col-md-2 btn btn-primary" id="delete">Delete</button>
                </div>
                `;
                $('#genreInput').append(line);
            })
        })
        $(document).on('click', '#delete', function(){
            $(this).parent().remove();
        })
    </script>
@endsection
