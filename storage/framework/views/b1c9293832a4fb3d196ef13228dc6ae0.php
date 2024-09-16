<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class="container-sm my-lg-5">
    <div class="card mb-3">
        <img src="<?php echo e(asset('post-images/'.$post->path_to_image)); ?>" class="card-img-top" alt="...">
        <div class="card-body">
          <h5 class="card-title"><?php echo e($post->title); ?></h5>
          <p class="card-text"><?php echo e($post->body); ?></p>
          <?php if($post->created_at < $post->updated_at): ?>
          <p class="card-text"><small class="text-body-secondary">Edytowane: <?php echo e(date('d.m.Y', strtotime($post->updated_at))); ?></small></p>

          <?php else: ?>
          <p class="card-text"><small class="text-body-secondary">Dodano: <?php echo e(date('d.m.Y', strtotime($post->created_at))); ?></small></p>

          <?php endif; ?>

        </div>
      </div>

    <form action="<?php echo e(url('/post/edit/' . $post->id)); ?>" method="get">
        <?php echo csrf_field(); ?>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
    <form action="<?php echo e(url('/post/destroy/' . $post->id)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('DELETE'); ?>
        <button type="submit" class="btn btn-primary">Delete</button>
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

<?php if (isset($component)) { $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa = $attributes; } ?>
<?php $component = App\View\Components\Footer::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('footer'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\App\View\Components\Footer::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $attributes = $__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__attributesOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa)): ?>
<?php $component = $__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa; ?>
<?php unset($__componentOriginal99051027c5120c83a2f9a5ae7c4c3cfa); ?>
<?php endif; ?>
<?php /**PATH C:\Users\Praktyki\Desktop\Klocki\resources\views/posts/single-post-page.blade.php ENDPATH**/ ?>