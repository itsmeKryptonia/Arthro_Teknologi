<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arthro Technology</title>
    <link rel="stylesheet" href="<?php echo e(asset('assets/css/style.css')); ?>">
</head>

<body>
    <?php echo $__env->make('component.header', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->make('component.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <script src="<?php echo e(asset('assets/js/script.js')); ?>"></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\tubes-tim-b-master\resources\views/main.blade.php ENDPATH**/ ?>