@extends('layout.app')
@section('body')
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
        <div class="row-dark">
            <x-signup-form />
        </div>
    </main>
    <footer></footer>


</body>
