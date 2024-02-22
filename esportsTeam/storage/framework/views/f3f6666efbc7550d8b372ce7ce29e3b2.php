<?php $__env->startSection('title'); ?>
    Jugadores de  Sahara Force India F1 Team
<?php $__env->stopSection(); ?>

<?php $__env->startSection('h1'); ?>
    <h1>Nuestros productos</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <?php $__currentLoopData = $products; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div>
            <h2><?php echo e($product->name); ?></h2>
            <ul>
                <li>Precio: <?php echo e($product->price); ?></li>
                <li>Stock: <?php echo e($product->stock); ?></li>
            </ul>
        </div>
    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/products/index.blade.php ENDPATH**/ ?>