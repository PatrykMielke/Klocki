<form method="POST" action="<?php echo e(route('zaloguj')); ?>">
    <?php echo csrf_field(); ?>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Adres e-mail</label>
      <input name="email" type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Hasło</label>
      <input name="password" type="password" class="form-control" id="exampleInputPassword1">
    </div>
    <div class="mb-3 form-check">
      <input name="remember" type="checkbox" class="form-check-input" id="exampleCheck1">
      <label class="form-check-label" for="exampleCheck1">Nie wylogowuj mne</label>
    </div>
    <button type="submit" class="btn btn-primary">Zaloguj</button>
  </form>


<?php /**PATH C:\Users\Praktyki\Desktop\Klocki\resources\views/auth/login.blade.php ENDPATH**/ ?>