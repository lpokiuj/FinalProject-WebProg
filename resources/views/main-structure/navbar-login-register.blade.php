@section('navbar-login-register')
<header>
    <div class="title">
        <div class="title-1">Movie</div>
        <div class="title-2">List</div>
    </div>
    <div class="header-menu">
        <a href="/movies" class="navigate">Home</a>
        <a href="/movies" class="navigate">Movies</a>
        <a href="/actors" class="navigate">Actors</a>
        @guest
            @else
            @if(auth()->user()->isAdmin)
            @else
                <a href="/watchlists" class="navigate">Watchlist</a>
            @endif
        @endguest
        @guest
            <a class="header-menu-2-register" href="/register">Register</a>
            <a class="header-menu-2-login" href="/login">Login</a>
            @else
                <div class="dropdown">
                    <button class="btn btn-secondary dropdown-toggle profile" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <img src="/assets/nav/user.svg" alt="">
                    </button>
                    <ul class="dropdown-menu ">
                        <li class="dropdown-item d-flex justify-content-center">
                            <a href="/profile" class="text-black" style="margin: 0;  border-bottom: 1px solid black; padding-left: 3rem; padding-right: 3rem; padding-bottom: 0.5rem;">Profile</a>
                        </li>
                        <li class="dropdown-item  d-flex justify-content-center">
                            <form action="/logout" method="POST">
                                @csrf
                                <button class="text-black" type="submit" style="border: none; padding-left: 3rem; padding-right: 3rem; padding-bottom: 0.5rem; background-color: transparent;">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
        @endguest
    </div>
</header>
<style>
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
        align-items: center;
        font-family: sans-serif;
        font-size: large;
        font-weight: 400;
        margin-right: 80px;
    }

    .header-menu a {
        text-decoration: none;
        margin-right: 80px;
        color: white;
        margin-right: 10px;
        margin-left: 20px;
    }

    .header-menu-2-register {
        padding: 10px 20px 10px 20px;
        background-color: #0B6BFD;
        color: white;
        border: solid 2px;
        border-color: #0B6BFD;
        border-radius: 5px;
    }

    .header-menu-2-login {
        padding: 10px 25px 10px 25px;
        color: #0B6BFD;
        border: solid 2px;
        border-color: #0B6BFD;
        border-radius: 5px;
        margin-left: 0 !important;
    }

    .profile {
        margin-left: 2rem;
        filter: invert(100%) sepia(96%) saturate(14%) hue-rotate(235deg) brightness(104%) contrast(102%);
    }

    .dropdown-menu{
        --bs-dropdown-link-active-bg: transparent;
    }
    
    .dropdown-toggle::after{
        border: none;
        /* background-color: transparent; */
    }

    .btn-secondary{
        background-color: transparent;
        border: none;
        --bs-btn-active-bg: transparent ;
        --bs-btn-hover-bg: transparent ;
    }

    .navigate{
        border: 2px solid transparent;
        transition: 0.3s;
        
    }

    .navigate:hover{
        border-bottom: 2px solid red;
        
    }
</style>
@endsection