<nav class="navbar navbar-expand-lg navbar-bg sticky-top">
    <div class="container-fluid d-flex py-3">
        <a class="brand" href=" <?php echo e(url('/')); ?> ">
            <img class="logo" src="<?php echo e(asset('logo.png')); ?>" alt="logo" width="150" height="50">
        </a>

        <button class="navbar-toggler align-end" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">

        <ul class="navbar-nav me-auto mb-2 mb-lg-0 d-flex justify-content-center py-3 mx-5 ">

            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" <?php echo e(url('/sklep')); ?> ">Sklep</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" <?php echo e(url('/posty')); ?> ">Blog</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href=" <?php echo e(url('/kontakt')); ?> ">Kontakt</a></li>
            <li class="nav-item"><a class="nav-link text-white fs-4 mx-3" href="<?php echo e(url('/post/create')); ?>">Utwórz nowy post</a></li>
        </ul>

        <?php if(Route::is('posty')): ?>
        <form class="mx-5 d-flex" role="search">
            <input class="form-control me-2" type="search" placeholder="Szukaj bloga" aria-label="Search">
            <button class="btn btn-outline-light" type="submit">Szukaj</button>
        </form>
        <?php endif; ?>
        </div>
    </div>
</nav>
<?php /**PATH D:\Coding\Kostki\resources\views/components/navbar.blade.php ENDPATH**/ ?>