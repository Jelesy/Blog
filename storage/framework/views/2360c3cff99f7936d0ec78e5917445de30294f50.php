<?php $__env->startSection('content'); ?>
    <h1 class="mt-2 mb-3">Создать пост</h1>
    <form method="post" action="<?php echo e(route('post.store')); ?>" enctype="multipart/form-data">
        <?php echo $__env->make('parts.form', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\blog\resources\views/posts/create.blade.php ENDPATH**/ ?>