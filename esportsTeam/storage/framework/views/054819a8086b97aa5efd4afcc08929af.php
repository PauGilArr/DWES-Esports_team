<?php $__env->startSection('title'); ?>
    <?php echo e($message->subject); ?> - Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<article>
    <div>
        <h2>Nombre: </h2>
        <div><?php echo e($message->name); ?></div>
    </div>
    <div>
        <h2>Asunto: </h2>
        <div><?php echo e($message->subject); ?></div>
    </div>
    <div>
        <h2>Texto: </h2>
        <p><?php echo e($message->text); ?></p>
    </div>
    <form action="<?php echo e(route('messages.destroy', $message)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('delete'); ?>
        <button type="submit">Borrar mensaje</button>
    </form>
</article>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/messages/show.blade.php ENDPATH**/ ?>