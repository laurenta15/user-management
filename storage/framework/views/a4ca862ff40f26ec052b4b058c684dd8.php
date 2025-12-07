<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard</title>

    <link href="<?php echo e(asset('sbadmin/vendor/fontawesome-free/css/all.min.css')); ?>" rel="stylesheet">
    <link href="<?php echo e(asset('sbadmin/css/sb-admin-2.min.css')); ?>" rel="stylesheet">
</head>

<body id="page-top">

<div id="wrapper">

    <?php echo $__env->make('layouts.sidebar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

    <div id="content-wrapper" class="d-flex flex-column">

        <div id="content">
            <?php echo $__env->make('layouts.navbar', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>

            <div class="container-fluid mt-3">
                <?php echo $__env->yieldContent('content'); ?>
            </div>
        </div>

    </div>

</div>

<script src="<?php echo e(asset('sbadmin/vendor/jquery/jquery.min.js')); ?>"></script>
<script src="<?php echo e(asset('sbadmin/vendor/bootstrap/js/bootstrap.bundle.min.js')); ?>"></script>
<script src="<?php echo e(asset('sbadmin/js/sb-admin-2.min.js')); ?>"></script>

</body>
</html>
<?php /**PATH C:\xampp\htdocs\user-management\resources\views/layouts/main.blade.php ENDPATH**/ ?>