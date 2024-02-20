<nav>
    <a href="{{ route('index')}}">Inicio</a>
    <a href="{{ route('players.index')}}">Jugadores</a>
    <a href="{{ route('events.index')}}">Eventos</a>
    <a href="{{ route('products.index')}}">Tienda</a>
    <a href="{{ route('messages.create')}}">Contacto</a>
    <a href="{{ route('index')}}">¿Donde estamos?</a>
    @auth
        @if (Auth::user()->rol == 'admin')
            <a href="{{ route('players.create')}}">Añadir jugador</a>
            <a href="{{ route('events.create')}}">Añadir evento</a>
            <a href="{{ route('messages.index')}}">Mensajes</a>
        @endif
        <a href="{{ route('users.show', Auth::user())}}">Ver perfil</a>
        <a href="{{ route('logout')}}">Cerrar sesión</a>
    @else
        <a href="{{ route('login')}}">Loguéate</a>
        <a href="{{ route('signup')}}">Regístrate</a>
    @endauth
</nav>
