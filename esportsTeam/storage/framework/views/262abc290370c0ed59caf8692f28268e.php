<?php $__env->startSection('title'); ?>
    Editar datos de cuenta - Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Editar datos de cuenta:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('users.update', $user)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <label for="birthday">Fecha de nacimiento:</label>
        <input type="date" name="birthday" id="birthday" value="<?php echo e(old('birthday') ? old('birthday') : $user->birthday); ?>">
        <?php $__errorArgs = ['birthday'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>Error: <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <label for="password">Nueva contraseña:</label>
        <input type="password" name="password" id="password" value="<?php echo e(old('password')); ?>">
        <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>Error: <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <label for="password_confirmation">Repite la contraseña:</label>
        <input type="password" name="password_confirmation" id="password_confirmation" value="<?php echo e(old('password_confirmation')); ?>">
        <?php $__errorArgs = ['password_confirmation'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
            <br>Error: <?php echo e($message); ?>

        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
        <br>

        <input type="submit" value="Crear cuenta">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/users/edit.blade.php ENDPATH**/ ?>