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
            <nav>
                <ul>
                    <li>
                        <a href="#">Domov</a>
                        <a href="#">Strešný náter</a>
                        <a href="#">Fasásdny náter</a>
                    </li>
                </ul>
            </nav>
            <div class="caller-btn">
                <a href="tel:+36303517871">Zavolať teraz</a>
            </div>
            <div class="break"></div>
            <div class="banner-text">
                <h1>Nemecká kvalita Ochrana, ktorá vydrží!</h1>
                <p>Strešné a fasádne nátery pre dlhú životnosť a dokonalý vzhľad.</p>
            </div>
        </div>
        <div class="overlay"></div>
    </header>
    <main>
        <div class="caller-box">
            
            <div>
                <p>Potrebujete poradiť?</p>
                <h1>Zanechajte svoje číslo a čoskoro vám zavoláme späť.</h1>
            </div>

            <div>
                <form action="" method="post">
                    <input type="text" name="" id="">
                    <input type="text" name="" id="">
                    <input type="submit" value="">
                </form>
            </div>
            
        </div>
        <div class="row-light">

        </div>
        <div class="row-dark"></div>
    </main>
    <footer></footer>


</body>

</html>