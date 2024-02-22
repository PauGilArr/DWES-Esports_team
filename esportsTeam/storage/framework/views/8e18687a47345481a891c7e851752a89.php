<?php $__env->startSection('title'); ?>
    Mensajes
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Mensajes</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <ul>
        <?php $__currentLoopData = $messages; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $message): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <li>
                <a href="<?php echo e(route('messages.show', $message)); ?>">
                    <?php echo e($message->name); ?> - <?php echo e($message->subject); ?>

                    <?php if($message->readed == 0): ?>
                        (Pendiente)
                    <?php endif; ?>
                </a>
            </li>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/messages/index.blade.php ENDPATH**/ ?>