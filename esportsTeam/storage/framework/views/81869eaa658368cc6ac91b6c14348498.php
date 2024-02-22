<?php $__env->startSection('title'); ?>
    <?php echo e($event->name); ?> - Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1><?php echo e($event->name); ?>:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<p><?php echo e($event->description); ?></p>
<ul>
    <li>Localización: <?php echo e($event->location); ?></li>
    <li>Fecha: <?php echo e($event->date); ?></li>
    <li>Hora: <?php echo e($event->hour); ?></li>
    <li>Tipo: <?php echo e($event->type); ?></li>
    <li>Etiquetas: <?php echo e($event->tags); ?></li>
</ul>
    <?php if(auth()->guard()->check()): ?>
        <?php if($event->users->contains(Auth::user())): ?>
            <a href="<?php echo e(route('events.like', $event)); ?>">Retirar like</a>
        <?php else: ?>
            <a href="<?php echo e(route('events.like', $event)); ?>">Dar like</a>
        <?php endif; ?>
        <?php if(Auth::user()->rol == 'admin'): ?>
            <?php if($event->visible == 0): ?>
                <a href="<?php echo e(route('events.make_visible_invisible', $event)); ?>">Hacer visible</a>
            <?php else: ?>
                <a href="<?php echo e(route('events.make_visible_invisible', $event)); ?>">Hacer invisible</a>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/events/show.blade.php ENDPATH**/ ?>