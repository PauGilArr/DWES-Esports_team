<?php $__env->startSection('title'); ?>
    Mi perfil
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Mi perfil</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Información general:</h2>
    <ul>
        <li>Nombre de usuario: <?php echo e($user->name); ?></li>
        <li>Correo electrónico: <?php echo e($user->email); ?></li>
        <li>Fecha de nacimiento: <?php echo e($user->birthday); ?></li>
        <li><a href="<?php echo e(route('users.edit', $user)); ?>">Editar cuenta</a></li>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/users/show.blade.php ENDPATH**/ ?>