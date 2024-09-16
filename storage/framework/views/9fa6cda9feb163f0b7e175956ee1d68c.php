<nav class="navbar navbar-expand-lg navbar-bg sticky-top py-3">
    <div class="container-fluid d-flex ">
        <a class="brand ms-4" href=" <?php echo e(url('/')); ?> ">
            <img class="logo" src="<?php echo e(asset('logo.png')); ?>" alt="logo" width="120" height="40">
        </a>

        <button class="navbar-toggler align-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center py-3 mx-5 ">

            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" <?php echo e(url('/sklep')); ?> ">Sklep</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" <?php echo e(url('/post')); ?> ">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href=" <?php echo e(url('/kontakt')); ?> ">Kontakt</a></li>

            <?php if(auth()->guard()->check()): ?>
                <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href="<?php echo e(url('/post/create')); ?>">Utwórz nowy post</a></li>
            <?php endif; ?>


        </ul>

        <?php if(Route::is('posty')): ?>
        <form class="mx-5 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Szukaj bloga" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Szukaj</button>
        </form>
        <?php endif; ?>



        <?php if(auth()->guard()->check()): ?>
        <div class="dropdown me-4">
            <button class="btn btn-secondary dropdown-toggle" type="button" data-bs-toggle="dropdown" aria-expanded="false">
                Witaj, <?php echo e(Auth::user()->name); ?>

            </button>
            <ul class="dropdown-menu">

                <li><a class="dropdown-item" href="#">Profil</a></li>

                <li><a class="dropdown-item" href="#">Zamówienia</a></li>

                <form method="POST" action="<?php echo e(route('wyloguj')); ?>">
                    <?php echo csrf_field(); ?>
                    <li><a class="dropdown-item" onclick="event.preventDefault();
                                                this.closest('form').submit();">Wyloguj się
                    </a></li>
                </form>
            </ul>
        </div>
        <?php endif; ?>

        <?php if(auth()->guard()->guest()): ?>
            <li class="nav-item"><a class="nav-link text-white fs-5 mx-3" href="<?php echo e(url('/logowanie')); ?>">Zaloguj się</a></li>
        <?php endif; ?>



        </div>
    </div>
</nav>
<?php /**PATH C:\Users\Praktyki\Desktop\Klocki\resources\views/components/navbar.blade.php ENDPATH**/ ?>