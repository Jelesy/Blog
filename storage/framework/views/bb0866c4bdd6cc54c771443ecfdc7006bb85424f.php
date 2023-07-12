<?php $__env->startSection('content'); ?>
    <div class="row">
        <div class="col-12">
            <div class="card mt-4 mb-4">
                <div class="card-header">
                    <h1><?php echo e($post->title); ?></h1>
                </div>
                <div class="card-body">
                    <img src="<?php echo e($post->image ?? asset('img/default.jpg')); ?>" alt="" class="img-fluid">
                    <p class="mt-3 mb-0"><?php echo e($post->body); ?></p>
                </div>
                <div class="card-footer">
                    <div class="clearfix">
                        <span class="float-left">
                            Автор: <?php echo e($post->author); ?>

                            <br>
                            Дата: <?php echo e(date_format($post->created_at, 'd.m.Y H:i')); ?>

                        </span>
                        <a href="<?php echo e(route('post.edit', ['id' => $post->post_id])); ?>" class="btn btn-dark float-right">Редактировать</a>
                        <form action="<?php echo e(route('post.delete', ['id' => $post->post_id])); ?>"
                              method="post" onsubmit="return confirm('Удалить этот пост?')"
                              class="d-inline">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <input type="submit" class="btn btn-danger" value="Удалить">
                        </form>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.site', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\OpenServer\domains\blog\resources\views/posts/show.blade.php ENDPATH**/ ?>