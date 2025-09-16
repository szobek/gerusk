<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Geru</title>
    @vite(['resources/scss/app.scss',"resources/css/normalize.css", 'resources/js/app.js'])


    <!-- Fonts -->
    <link href="https://fonts.bunny.net/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

    <!-- Styles -->
    <style>

    </style>

    <style>
        body {
            font-family: 'Nunito', sans-serif;
        }
    </style>
</head>

<body>
    <header>
        <div class="wrapper">

            <div class="logo">

                <a href="">
                    <img src="/images/logo.png" alt="Geru logo">
                </a>
            </div>
            <x-Menu />
            <div class="caller-btn hide-in-small">
                <a href="tel:+36303517871">Zavolať teraz</a>
            </div>
            <div class="break"></div>
            <x-banner-text />
            <div class="caller-btn">
                <a href="tel:+36303517871">+36 30 351 78 71</a>
            </div>
        </div>
        <div class="overlay"></div>
    </header>
    <main>
        <x-caller-box />
        <div class="row-light">

        </div>
        <div class="row-dark"></div>
    </main>
    <footer></footer>


</body>

</html>