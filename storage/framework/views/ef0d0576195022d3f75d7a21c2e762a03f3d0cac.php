<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <title><?php echo e(config('app.name', 'SB Admin 2 | cham11ng')); ?></title>

    <link rel="stylesheet" href="<?php echo e(asset('css/app.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
    
    <link rel="stylesheet" href="<?php echo e(asset('vendor/font-awesome/css/font-awesome.min.css')); ?>">
    <link rel="stylesheet" href="<?php echo e(asset('ioconic/css/ionicons.min.css')); ?>">


    <!-- stylesheet for page -->
    <?php echo $__env->yieldContent('stylesheet'); ?>

    <!-- Scripts -->
    <script>
        window.Laravel = <?php echo json_encode([
            'csrfToken' => csrf_token(),
        ]); ?>
    </script>

</head>
<body>
<?php echo $__env->yieldContent('body'); ?>



<script src="<?php echo e(asset("js/app.js")); ?>"></script>



<!-- scripts for page -->
<?php echo $__env->yieldContent('scripts'); ?>


<script src="<?php echo e(asset("js/admin.js")); ?>"></script>


</body>
</html>