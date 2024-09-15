<div class="container-sm my-lg-5">
    <form action="<?php echo e(url('/post/edit/' . $post->id)); ?> " method="post">
        <?php echo method_field('PUT'); ?>
        <?php echo csrf_field(); ?>
        <div class="mb-3">
          <label for="exampleInputEmail1" class="form-label">title</label>
          <input name="title" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder=" <?php echo e($post->title); ?>" value = "<?php echo e($post->title); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">snippet</label>
          <input name="snippet" type="text" class="form-control" id="exampleInputPassword1" placeholder=" <?php echo e($post->snippet); ?>" value = "<?php echo e($post->snippet); ?>">
        </div>
        <div class="mb-3">
          <label for="exampleInputPassword1" class="form-label">body</label>
          <input name="body" type="text" class="form-control" id="exampleInputPassword1" placeholder=" <?php echo e($post->body); ?>" value = "<?php echo e($post->body); ?>">
        </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

<?php echo $__env->make('layout.layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Coding\Kostki\resources\views/posts/edit-post.blade.php ENDPATH**/ ?>