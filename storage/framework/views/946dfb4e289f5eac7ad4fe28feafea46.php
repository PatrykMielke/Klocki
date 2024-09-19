<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Zaloguj się</h1>
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
              <label class="form-check-label" for="exampleCheck1">Nie wylogowuj mnie</label>
            </div>
            <button type="submit" class="btn btn-primary">Zaloguj</button>
          </form>
    </div>

    <?php if (isset($component)) { $__componentOriginal2e3c67daf91d698fab2ade49f1143e61 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2e3c67daf91d698fab2ade49f1143e61 = $attributes; } ?>
<?php $component = App\View\Components\Postbackground::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('postbackground'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Postbackground::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2e3c67daf91d698fab2ade49f1143e61)): ?>
<?php $attributes = $__attributesOriginal2e3c67daf91d698fab2ade49f1143e61; ?>
<?php unset($__attributesOriginal2e3c67daf91d698fab2ade49f1143e61); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2e3c67daf91d698fab2ade49f1143e61)): ?>
<?php $component = $__componentOriginal2e3c67daf91d698fab2ade49f1143e61; ?>
<?php unset($__componentOriginal2e3c67daf91d698fab2ade49f1143e61); ?>
<?php endif; ?>
</div>
<?php /**PATH D:\Coding\Kostki\resources\views/auth/login.blade.php ENDPATH**/ ?>