<?php $__env->startSection('title'); ?>
    Inicia sesión.
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Inicia sesión.</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('login')); ?>" method="POST">
        <?php echo csrf_field(); ?>

        <label for="name">Nombre de usuario:</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name')); ?>">
        <br>

        <label for="password">Contraseña:</label>
        <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>">
        <br>

        <input type="checkbox" name="remember" id="remember">
        <label for="remember">Recordar login</label>
        <br>

        <?php if(isset($error)): ?>
            <div><?php echo e($error); ?></div>
        <?php endif; ?>

        <input type="submit" value="Iniciar sesión">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/auth/login.blade.php ENDPATH**/ ?>