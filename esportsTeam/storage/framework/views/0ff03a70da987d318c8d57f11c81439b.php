<?php $__env->startSection('title'); ?>
    Jugadores de  Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Nuestros jugadores:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php if(auth()->guard()->check()): ?>
        <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('players.show', $player)); ?>">
                <div>
                    <img src="/storage/<?php echo e($player->name); ?>.png" alt="Imagen de <?php echo e($player->name); ?>">
                    <div class="name"><?php echo e($player->name); ?></div>
                </div>
            </a>
            <?php if(Auth::user()->rol == 'admin'): ?>
                <?php if($player->visible == 0): ?>
                    <li><a href="<?php echo e(route('players.make_visible_invisible', $player)); ?>">Hacer visible</a></li>
                <?php else: ?>
                    <li><a href="<?php echo e(route('players.make_visible_invisible', $player)); ?>">Hacer invisible</a></li>
                <?php endif; ?>
            <?php endif; ?>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php else: ?>
        <?php $__currentLoopData = $players; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $player): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <div>
                <img src="/storage/<?php echo e($player->name); ?>.png" alt="Imagen de <?php echo e($player->name); ?>">
                <div class="name"><?php echo e($player->name); ?></div>
            </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/players/index.blade.php ENDPATH**/ ?>