<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="container my-lg-5 text-center">
        <div class="container text-white">
            <h1 class="py-5 display-1">Strona nie istnieje!</h1>
          </div>

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
<?php /**PATH C:\Users\Praktyki\Desktop\Klocki\resources\views/errors/404.blade.php ENDPATH**/ ?>