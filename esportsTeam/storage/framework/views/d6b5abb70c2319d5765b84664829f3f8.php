<nav>
    <a href="<?php echo e(route('index')); ?>">Inicio</a>
    <a href="<?php echo e(route('players.index')); ?>">Jugadores</a>
    <a href="<?php echo e(route('events.index')); ?>">Eventos</a>
    <a href="<?php echo e(route('products.index')); ?>">Tienda</a>
    <a href="<?php echo e(route('messages.create')); ?>">Contacto</a>
    <a href="<?php echo e(route('location.index')); ?>">¿Donde estamos?</a>
    <?php if(auth()->guard()->check()): ?>
        <?php if(Auth::user()->rol == 'admin'): ?>
            <a href="<?php echo e(route('players.create')); ?>">Añadir jugador</a>
            <a href="<?php echo e(route('events.create')); ?>">Añadir evento</a>
            <a href="<?php echo e(route('messages.index')); ?>">Mensajes</a>
        <?php endif; ?>
        <a href="<?php echo e(route('users.show', Auth::user())); ?>">Ver perfil</a>
        <a href="<?php echo e(route('logout')); ?>">Cerrar sesión</a>
    <?php else: ?>
        <a href="<?php echo e(route('login')); ?>">Loguéate</a>
        <a href="<?php echo e(route('signup')); ?>">Regístrate</a>
    <?php endif; ?>
</nav>
<?php /**PATH D:\Proyectos de Laravel\DWES-Esports_team\esportsTeam\resources\views/partials/nav.blade.php ENDPATH**/ ?>