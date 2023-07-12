<!doctype html>
<html lang="ru">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Блог</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css">
    <script src="<?php echo e(asset('js/bootstrap.js')); ?>"></script>
</head>
<body>
<div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container-fluid">
            <a class="navbar-brand" href="<?php echo e(route('post.index')); ?>">Мой блог</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse show" id="navbarText">
                <ul class="navbar-nav me-auto mb-2 mb-xl-0">
                    <li class="nav-item">
                        <a class="nav-link" href="#">Автор</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="<?php echo e(route('post.create')); ?>">Создать</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Контакты</a>
                    </li>
                </ul>
                <form class="d-flex" action="<?php echo e(route('post.search')); ?>">
                    <input class="form-control me-2" name="search" type="search" placeholder="Найти пост..." aria-label="Поиск">
                    <button class="btn btn-outline-success" type="submit">Поиск</button>
                </form>
            </div>
        </div>
    </nav>

    <?php if($message = Session::get('success')): ?>
        <div class="alert alert-success alert-dismissible mt-4" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Закрыть">
                <span aria-hidden="true">&times;</span>
            </button>
            <?php echo e($message); ?>

        </div>
    <?php endif; ?>

    <?php echo $__env->yieldContent('content'); ?>
</div>
</body>
</html>
<?php /**PATH D:\OpenServer\domains\blog\resources\views/layouts/site.blade.php ENDPATH**/ ?>