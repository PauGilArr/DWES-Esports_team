<?php $__env->startSection('title'); ?>
    Editar evento
<?php $__env->stopSection(); ?>

<?php $__env->startSection('title'); ?>
    <h1>Editar evento:</h1>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <form action="<?php echo e(route('events.update', $event)); ?>" method="post">
        <?php echo csrf_field(); ?>
        <?php echo method_field('put'); ?>

        <label for="name">Nombre:</label>
        <input type="text" name="name" id="name" value="<?php echo e(old('name') ? old('name') : $event->name); ?>">
        <?php $__errorArgs = ['name'];
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

        <label for="description">Descripción:</label>
        <textarea name="description" id="description" cols="30" rows="10"><?php echo e(old('description') ? old('description') : $event->description); ?></textarea>
        <?php $__errorArgs = ['description'];
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

        <label for="location">Localización:</label>
        <textarea name="location" id="location" cols="30" rows="10"><?php echo e(old('location') ? old('location') : $event->location); ?></textarea>
        <?php $__errorArgs = ['location'];
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

        <label for="date">Fecha:</label>
        <input type="date" name="date" id="date" value="<?php echo e(old('date') ? old('date') : $event->date); ?>">
        <?php $__errorArgs = ['date'];
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

        <label for="hour">Hora</label>
        <input type="time" name="hour" id="hour" value="<?php echo e(old('hour') ? old('hour') : $event->hour); ?>">
        <?php $__errorArgs = ['hour'];
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

        <label for="type">Tipo</label>
        <select name="type" id="type">
            <option value="official" <?php echo e("official"==old('type') || "official"==$event->type ? 'selected' : ''); ?>>Oficial</option>
            <option value="exhibition" <?php echo e("exhibition"==old('type') || "exhibition"==$event->type ? 'selected' : ''); ?>>Exhibición</option>
            <option value="charity" <?php echo e("charity"==old('type') || "charity"==$event->type ? 'selected' : ''); ?>>Caridad</option>
        </select>
        <?php $__errorArgs = ['type'];
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

        <label for="tags">Etiquetas</label>
        <textarea name="tags" id="tags" cols="30" rows="10"><?php echo e(old('tags')  ? old('tags') : $event->tags); ?></textarea>
        <?php $__errorArgs = ['tags'];
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

        <label for="visible">Visible:</label>
        <input type="checkbox" name="visible" id="visible" <?php echo e($event->visible == 1 ? 'checked' : ''); ?>>
        <?php $__errorArgs = ['visible'];
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

        <input type="submit" value="enviar">
    </form>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layout', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/events/edit.blade.php ENDPATH**/ ?>