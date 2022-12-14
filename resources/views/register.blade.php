@extends('main-structure.main-guest')
@extends('main-structure.navbar-login-register')
@extends('main-structure.footer')

@section('title', 'register')

@section('content')
    <div class="body">
        <div class="body-headlines">
            <div class="body-headlines-1">
                Hello, Welcome to
            </div>
            <div class="body-headlines-2">
                <div class="title">
                    <div class="title-1">Movie</div>
                    <div class="title-2">List</div>
                </div>
            </div>
        </div>
        <div class="filling">
            <form action="/register" method="POST">
                @csrf
                <div class="login">
                    <label for="username">Username</label>
                    <input type="text" id="username" name="username" placeholder="Enter your username">
                </div>
                <div class="login">
                    <label class="email">E-mail</label>
                    <input type="text" id="email" name="email" placeholder="Enter your e-mail">
                </div>
                <div class="login">
                    <label class="password">Password</label>
                    <input type="password" id="email" name="password" placeholder="Enter your password">
                </div>
                <div class="login">
                    <label class="confirm-password">Confirm Password</label>
                    <input type="password" id="email" name="password_confirmation" placeholder="Confirm your password">
                </div>
                <button type="submit" class="login-button">
                    <label>register</label>
                    <img src="/assets/login/Arrow Right.svg" alt="" srcset="">
                </button>
            </form>
            @if ($errors->any())
                <h4>Error</h4>
                <ul class="ps-5">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            @endif
            <div class="dont-have-account">
                <label>Already have an account?</label>
                <a href="/login">Login now!</a>
            </div>
        </div>
    </div>
    <style>
        .body {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #121318;
            flex-direction: column;
            height: 700px;
        }

        .body-headlines {
            display: flex;
        }

        .body-headlines-1 {
            font-family: sans-serif;
            font-weight: 600;
            font-size: xx-large;
            color: white;

        }

        .body-headlines-2 {
            margin-left: -70px;
        }

        .filling {
            margin-top: 2rem;
        }

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
            margin-right: 10rem;
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

        .login-button {
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #E50913;
            margin-top: 1rem;
            border-radius: 5px;
            padding: 0.5rem 0;
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

        .dont-have-account {
            display: flex;
            justify-content: center;
            margin-top: 10px;
            color: white;
            font-weight: 550;
            font-family: sans-serif;
        }

        .dont-have-account a {
            color: #E50913;
            text-decoration: none;
        }
    </style>
@endsection
