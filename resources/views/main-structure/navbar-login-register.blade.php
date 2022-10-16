@section('navbar-login-register')
    <header>
        <div class="title">
            <div class="title-1">Movie</div>
            <div class="title-2">List</div>
        </div>
        <div class="header-menu">
            <div class="header-menu-1">
                <a href="#">Home</a>
                <a href="#">Movies</a>
                <a href="#">Actors</a>
            </div>
            <div class="header-menu-2">
                <a class="header-menu-2-register" href="#">Register</a>
                <a class="header-menu-2-login" href="#">Login</a>
            </div>
        </div>
    </header>
    <style>
        /* navbar */
        header {
            padding: 30px 20px 30px 20px;
            background-color: #1F1F1F;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        .title {
            display: flex;
            font-family: Arial, Helvetica, sans-serif;
            color: #E50913;
            font-size: xx-large;
            font-weight: bold;
            margin-left: 80px;
        }

        .title-2 {
            color: white;
        }

        .header-menu {
            display: flex;
            font-family: sans-serif;
            font-size: large;
            font-weight: 400;
            margin-right: 80px;
        }

        .header-menu a {
            text-decoration: none;
        }

        .header-menu-1 {
            margin-right: 20px;
        }

        .header-menu-1 a {
            color: white;
            margin-right: 10px;
            margin-left: 20px;
        }

        .header-menu {
            display: flex;
        }

        .header-menu-2 a {
            padding: 10px 20px 10px 20px;
            border: solid 2px;
            border-color: #0B6BFD;
            border-radius: 5px;
            margin-left: 10px;
        }

        .header-menu-2-register {
            background-color: #0B6BFD;
            color: white;
        }

        .header-menu-2-login {
            color: #0B6BFD;
        }
    </style>
@endsection
