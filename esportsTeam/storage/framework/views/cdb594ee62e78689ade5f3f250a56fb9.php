<?php $__env->startSection('title'); ?>
    Próximos eventos - Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Próximos eventos:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('events.show', $event)); ?>">
                <div>
                    <div class="name"><?php echo e($event->name); ?></div>
                    <?php if(auth()->guard()->check()): ?>
                        <?php if(Auth::user()->rol == 'admin'): ?>
                            <?php if($event->visible == 0): ?>
                                <a href="<?php echo e(route('events.make_visible_invisible', $event)); ?>">Hacer visible</a>
                            <?php else: ?>
                                <a href="<?php echo e(route('events.make_visible_invisible', $event)); ?>">Hacer invisible</a>
                            <?php endif; ?>
                            <a href="<?php echo e(route('events.destroy', $event)); ?>">Borrar evento</a>
                            <a href="<?php echo e(route('events.edit', $event)); ?>">Editar evento</a>
                        <?php endif; ?>
                        <?php if($event->users->contains(Auth::user())): ?>
                            <a href="<?php echo e(route('events.like', $event)); ?>">Retirar like</a>
                        <?php else: ?>
                            <a href="<?php echo e(route('events.like', $event)); ?>">Dar like</a>
                        <?php endif; ?>
                    <?php endif; ?>
                </div>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <?php $__currentLoopData = $events; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $event): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <div class="name"><?php echo e($event->name); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/events/index.blade.php ENDPATH**/ ?>