<!DOCTYPE html>
<html lang="fr">
    <head>
        <meta charset="UTF-8">
        <title>Book a Book</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        @livewireStyles
    </head>

    <body class="p-12 bg-background font-custom">
        @yield('content')
        @livewireScripts
        <script src="./js/app.js" defer></script>
    </body>
</html>
