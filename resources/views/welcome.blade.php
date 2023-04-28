<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        @vite('resources/css/app.css')
        <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/plugins/fontawesome-free/css/all.min.css') }}">
        <link rel="stylesheet" href="{{ asset('node_modules/admin-lte/dist/css/adminlte.min.css') }}">
    </head>
    <body class="antialiased">

        <h1>yeah</h1>
        @vite('resources/js/app.js')
        <script src="{{ asset('node_modules/admin-lte/plugins/jquery/jquery.min.js') }}"></script>
        <script src="{{ asset('node_modules/admin-lte/plugins/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
        <script src="{{ asset('node_modules/admin-lte/dist/js/adminlte.min.js') }}"></script>
    </body>
</html>
