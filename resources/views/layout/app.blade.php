<!DOCTYPE html>
<html lang="sk">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="shortcut icon" href="/images/logo.png" type="image/png">
    <title>Geru</title>
    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">
    @vite(['resources/assets/scss/app.scss',"resources/assets/css/normalize.css", 'resources/assets/js/app.js'])
</head>
<body>
    <header>
        <x-header />
    </header>
    @yield('body')
    <x-footer />
</body>
</html>