<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>

<div class=" bg-body my-5 py-3 rounded mx-auto post-form">
    <div class="container-fluid mx-auto">
        <h1 class="text-center">Edytuj post</h1>
        <form method="POST" action="<?php echo e(url('/post/edit/' . $post->id)); ?>" enctype="multipart/form-data">
            <?php echo csrf_field(); ?>
            <?php echo method_field('PATCH'); ?>
            <div class="mb-3">
              <label for="exampleInputEmail1" class="form-label">Tytuł</label>
              <input required name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="title" value="<?php echo e($post->title); ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Opis</label>
              <input required  name="snippet" type="text" class="form-control" id="snippet" value="<?php echo e($post->snippet); ?>">
            </div>
            <div class="mb-3">
              <label for="exampleInputPassword1" class="form-label">Treść</label>
              <input required  name="body" type="text" class="form-control" id="body" value="<?php echo e($post->body); ?>">
            </div>
            <div class="mb-3">
                <label for="formFile" class="form-label">Tło</label>
                <input name="file" class="form-control" type="file" id="formFile">
              </div>
            <button type="submit" class="btn btn-primary">Edytuj</button>
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





<?php /**PATH C:\Users\Praktyki\Desktop\Klocki\resources\views/posts/edit-post.blade.php ENDPATH**/ ?>