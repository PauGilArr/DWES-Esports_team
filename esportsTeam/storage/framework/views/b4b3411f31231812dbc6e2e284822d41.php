<?php $__env->startSection('title'); ?>
    <?php echo e($player->name); ?> - Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1><?php echo e($player->name); ?></h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
<div>
    <img src="/storage/<?php echo e($player->name); ?>.png" alt="<?php echo e($player->name); ?> image">
</div>
<ul>
    <li>Edad: <?php echo e($player->age); ?></li>
    <li>Poles: <?php echo e($player->poles); ?></li>
    <li>Victorias: <?php echo e($player->victories); ?></li>
    <?php if($player->twitter): ?>
        <li>Twitter: <?php echo e($player->twitter); ?></li>
    <?php endif; ?>
    <?php if($player->instagram): ?>
        <li>Instagram: <?php echo e($player->instagram); ?></li>
    <?php endif; ?>
    <?php if($player->twitch): ?>
        <li>Twitch: <?php echo e($player->twitch); ?></li>
    <?php endif; ?>
    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->rol == 'admin'): ?>
            <?php if($player->visible == 0): ?>
                <li><a href="<?php echo e(route('players.make_visible_invisible', $player)); ?>">Hacer visible</a></li>
            <?php else: ?>
                <li><a href="<?php echo e(route('players.make_visible_invisible', $player)); ?>">Hacer invisible</a></li>
            <?php endif; ?>
        <?php endif; ?>
    <?php endif; ?>
</ul>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/players/show.blade.php ENDPATH**/ ?>