<?php $__env->startSection('title'); ?>
    Mensaje enviado correctamente.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Mensaje enviado correctamente.</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <a href="<?php echo e(route('index')); ?>">Volver a la página de inicio</a>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/messages/successful.blade.php ENDPATH**/ ?>