<?php $__env->startSection('content'); ?>

    <h1 class="mt-2 mb-3">Все посты блога</h1>
    <div class="row">
        <?php $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div class="col-6 mb-4">
                <div class="card">
                    <div class="card-header"><h3><?php echo e($post->title); ?></h3></div>
                    <div class="card-body">
                        <img src="<?php echo e($post->thumb ?? asset('img/default.jpg')); ?>" alt="" class="img-fluid">
                        <p class="mt-3 mb-0"><?php echo e($post->excerpt); ?></p>
                    </div>
                    <div class="card-footer">
                        <div class="clearfix">
                            <span class="float-left">
                                Автор: <?php echo e($post->author); ?>

                                <br>
                                Дата: <?php echo e(date_format($post->created_at, 'd.m.Y H:i')); ?>

                            </span>
                            <a href="<?php echo e(route('post.show', ['id' => $post->post_id])); ?>" class="btn btn-dark float-right">Читать дальше</a>
                        </div>
                    </div>
                </div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
    <?php echo e($posts->links()); ?>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\blog\resources\views/posts/index.blade.php ENDPATH**/ ?>