<nav class="navbar navbar-expand-lg navbar-bg sticky-top">
    <div class="container-fluid d-flex py-3">
        <a class="brand mx-5" href=" {{ url('/')}} ">
            <img src="{{ asset('logo.png') }}" alt="logo" width="150" height="50">
        </a>

        <button class="navbar-toggler align-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center py-3 mx-5 ">

            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" {{ url('/sklep')}} ">Sklep</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" {{ url('/posty')}} ">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" {{ url('/kontakt')}} ">Kontakt</a></li>

        </ul>

        @if (Route::has('post'))
        <form class="mx-5 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Szukaj bloga" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
        </form>
        @endif



        </div>
    </div>
</nav>
