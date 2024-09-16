<nav class="navbar navbar-expand-lg navbar-bg sticky-top py-3">
    <div class="container-fluid d-flex ">
        <a class="brand ms-4" href=" {{ url('/')}} ">
            <img class="logo" src="{{ asset('logo.png') }}" alt="logo" width="120" height="40">
        </a>

        <button class="navbar-toggler align-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center py-3 mx-5 ">

            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" {{ url('/sklep')}} ">Sklep</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" {{ url('/posty')}} ">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" {{ url('/kontakt')}} ">Kontakt</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href="{{ url('/post/create') }}">Utwórz nowy post</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href="{{ url('/logowanie') }}">Zaloguj się</a></li>

        </ul>

        @if (Route::is('posty'))
        <form class="mx-5 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Szukaj bloga" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Szukaj</button>
        </form>
        @endif


        </div>
    </div>
</nav>
