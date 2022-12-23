@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('content')
    <style>
        .login {
            background-color: #1F1F1F;
            padding: 0.5rem 2rem 0.5rem 2rem;
            border-radius: 10px;
            margin-top: 1rem;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .login label {
            color: white;
            font-size: large;
            font-family: sans-serif;
        }

        .login input {
            text-decoration: none;
            font-size: large;
            background-color: #1F1F1F;
            border-style: none;
            color: white;
            width: 300px;
            padding: 0.5rem;
        }
        .login-button{
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #E50913;
            margin-top: 1rem;
            border-style: none;
            border-radius: 10px;
            padding: 1rem 14rem;
            text-decoration: none;
        }

        .login-button label {
            font-size: large;
            font-family: sans-serif;
            text-decoration: none;
            color: white;
        }

        .login-button img {
            filter: invert(100%) sepia(93%) saturate(27%) hue-rotate(233deg) brightness(107%) contrast(100%);
        }

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
    <div class="container d-flex justify-content-center align-items-center" style="min-height: 800px;">
        <div class="row">
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center" style="margin-right: 2rem;">
                <h2 class="text-white">My Profile</h2>
                <button type="button" class="btn" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    <img src="{{$user->image}}" alt="" style="height: 200px; border-radius: 100rem;">
                </button>
                
                <div class="text-white">{{$user->username}}</div>
                <div class="text-white">{{$user->email}}</div>
            </div>
            <div class="col-md-8"na>
                <h1 class="text-danger">Update Profile</h1>
                <form action="/profile" method="POST" id="updateProfile" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="login">
                        <label for="username">Username</label>
                        <input type="text" id="username" name="username" value="{{$user->username}}">
                    </div>
                    <div class="login">
                        <label class="email">E-mail</label>
                        <input type="text" id="email" name="email" value="{{$user->email}}">
                    </div>
                    <div class="login">
                        <label class="password">DOB</label>
                        <input type="date" id="email" name="DOB" value="{{$user->DOB}}">
                    </div>
                    <div class="login">
                        <label class="confirm-password" >Phone Number</label>
                        <input type="" id="email" name="phone" value="{{$user->phone}}" placeholder="Input phone number">
                    </div>
                    <button type="submit" class="login-button text-white">Update</button>
                </form>
            </div>
            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h1 class="modal-title fs-5 text-white" id="exampleModalLabel">Update Image</h1>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <input form="updateProfile" value="{{$user->image}}" placeholder="{{$user->image}}" type="text" name="image" style="width: 29rem;">
                            <div style="font-size: smaller; color: #4A4B50;">Please upload your image to other sources first and Use the URL</div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                            <button type="button" class="btn btn-danger save" data-bs-dismiss="modal">Save Image</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection