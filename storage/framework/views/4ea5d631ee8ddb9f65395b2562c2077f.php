<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>



<div class="container-sm mx-auto">
    <div class="row row-cols-1 row-cols-md-3 g-4 mt-3s">
    <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
    <div class="col">
        <a class="blog-a" href="<?php echo e(url('/post/' . $post->id)); ?>">
            <div class="card mb-4">

                <img src="<?php echo e(asset('post-images/'.$post->image)); ?>" class="card-img-top" alt="<?php echo e($post->image); ?>">

                <div class="card-body">
                    <h5 class="card-title"><?php echo e($post->title); ?></h5>
                    <p class="card-text"><?php echo e($post->snippet); ?></p>
                    <p class="card-text"><small class="text-muted">
                <?php if($post->created_at < $post->updated_at): ?>
                    Edytowane: <?php echo e(date('d.m.Y', strtotime($post->updated_at))); ?>

                <?php else: ?>
                    Dodano: <?php echo e(date('d.m.Y', strtotime($post->created_at))); ?>

                <?php endif; ?>
                    przez <?php echo e($post->user->name); ?>

                    </small></p>
                </div>
            </div>

        </a>
    </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

    </div>

</div>
<div class="container-fluid blurred-index"></div>
<?php /**PATH D:\Coding\Kostki\resources\views/posts/main-page.blade.php ENDPATH**/ ?>