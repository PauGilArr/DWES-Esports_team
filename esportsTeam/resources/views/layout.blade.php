<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>
        @yield('title')
    </title>
</head>
<body>
    <header>
        @include('partials.teamlogo')
        @include('partials.nav')
    </header>
    @yield('h1')
    @yield('content')
    @include('partials.footer')
</body>
</html>
