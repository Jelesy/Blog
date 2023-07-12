<?php echo csrf_field(); ?>
<div class="form-group">
    <input type="text" class="form-control" name="title" maxlength="100"
           placeholder="Заголовок" required value="<?php echo e($post->title ?? ''); ?>">
</div>
<div class="form-group">
            <textarea class="form-control" name="excerpt" maxlength="200"
                      placeholder="Анонс поста" required><?php echo e($post->excerpt ?? ''); ?></textarea>
</div>
<div class="form-group">
            <textarea class="form-control" name="body"
                      placeholder="Текст поста" rows="7" required><?php echo e($post->body ?? ''); ?></textarea>
</div>
<div class="form-group">
    <input type="file" class="form-control-file" name="image">
</div>
<?php if(isset($post->image)): ?>
    <div class="form-group form-check">
        <input type="checkbox" class="form-check-input" name="remove" id="remove">
        <label class="form-check-label" for="remove">
            Удалить загруженное <a href="<?php echo e($post->image); ?>" target="_blank">изображение</a>
        </label>
    </div>
<?php endif; ?>
<div class="form-group">
    <button type="submit" class="btn btn-primary">Сохранить</button>
</div>php
<?php /**PATH D:\OpenServer\domains\blog\resources\views/parts/form.blade.php ENDPATH**/ ?>