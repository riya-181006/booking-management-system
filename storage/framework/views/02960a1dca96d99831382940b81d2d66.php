<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_','-',app()->getLocale())); ?>">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width,initial-scale=1">
        <meta name="theme-color" content="#712cf9">
        <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
        <title>Booking Management System | <?php echo $__env->yieldContent('title'); ?></title>
        <?php echo $__env->make('layout.css', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('style'); ?>
    </head>
    <body>
        <?php echo $__env->yieldContent('content'); ?>
        <?php echo $__env->make('layout.js', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?>
        <?php echo $__env->yieldContent('customjs'); ?>
    </body>
</html>
<?php /**PATH C:\Users\KIIT\Desktop\INTERSHIP\WEB DEVELOPEMENT\PROJECTS\PROJECT3\bookingsms\resources\views/layout/baseview.blade.php ENDPATH**/ ?>