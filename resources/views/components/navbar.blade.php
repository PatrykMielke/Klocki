<nav class="navbar navbar-expand-lg border-body navbar-bg sticky-top">
    <div class="container-fluid d-flex justify-content-center py-3">

        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>
        <div class="colla`pse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center py-3">

            <li class="nav-item"><a class="nav-link" href=" {{ url('/sklep')}} ">Sklep</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('/blog')}} ">Blog</a></li>
            <li class="nav-item"><a class="nav-link" href=" {{ url('/kontakt')}} ">Kontakt</a></li>

        </ul>

        <a class="brand" href=" {{ url('/')}} ">
            <img src="{{ asset('logo.png') }}" alt="logo">
        </a>

        <form class="d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Szukaj bloga" aria-label="Search">
            <button class="btn btn-outline-success" type="submit">Szukaj</button>
        </form>

        </div>
    </div>
    </nav>
