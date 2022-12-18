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

        .login div {
            text-decoration: none;
            font-size: large;
            background-color: #1F1F1F;
            border-style: none;
            color: white;
            width: 300px;
            padding: 0.5rem;
            padding-left: 2rem;
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
    </style>
    <div class="container d-flex flex-column justify-content-center align-items-center" style="min-height: 800px;">
        <div class="row">
            <div class="col-md-3 d-flex flex-column justify-content-center align-items-center" style="margin-right: 2rem;">
                <h2 class="text-white">My Profile</h2>
                <img src="{{url('storage/'.$user->profile)}}" alt="" style="height: 200px;">
                <div class="text-white">{{$user->username}}</div>
                <div class="text-white">{{$user->email}}</div>
            </div>
            <div class="col-md-8"na>
                    <div class="login">
                        <label for="username">Username</label>
                        <div>{{$user->username}}</div>
                    </div>
                    <div class="login">
                        <label class="email">E-mail</label>
                        <div>{{$user->email}}</div>
                    </div>
                    <div class="login">
                        <label class="password">DOB</label>
                        <div>{{$user->DOB}}</div>
                    </div>
                    <div class="login">
                        <label class="confirm-password" >Phone Number</label>
                        <div>{{$user->phone}}</div>
                    </div>
            </div>
        </div>
        <div class="row d-flex mt-4">
            <a href="/profile/update" class="text-white d-flex justify-content-center py-3" style="background-color: red; margin-bottom: 0.5rem; border-style: none; border-radius: 5px; text-decoration: none; cursor: pointer; padding: 0 20rem;">Edit</a>
        </div>
        
    </div>
@endsection