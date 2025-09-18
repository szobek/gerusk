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

        <div class="row-house">
            <div class="wrapper">
                 @php
                    $examplesImages = [
                        asset('images/examples/1.jpg'),
                        asset('images/examples/2.jpg'),
                        asset('images/examples/3.jpg'),
                        asset('images/examples/4.jpg'),
                        asset('images/examples/5.jpg'),
                    ];
                @endphp
                <x-image-carousel title="Ukážky našich realizácií"
                    subtitle="Obnova strechy – Porovnanie pred a po realizácii" :images="$examplesImages"/>
                     @php
                    $refImages = [
                        asset('images/ref/1.jpg'),
                        asset('images/ref/2.jpg'),
                        asset('images/ref/3.jpg'),
                        asset('images/ref/4.jpg'),
                    ];
                @endphp
                <x-image-carousel title="Referenciák"
                    subtitle="Rekonštrukcia fasády – Porovnanie pred a po realizácii" :images="$refImages" />
            </div>
        </div>

        <div class="row-transparent">
            <div class="wrapper">
                <p>Neviete, kde začať?</p>
                <h2>Postaráme sa o vašu strechu aj fasádu <br>
                    efektívne a dlhotrvajúco</h2>
            </div>
        </div>

        <div class="row-signup">
            <div class="wrapper">

                <x-signup-form />
            </div>
        </div>
    </main>
    <footer></footer>


</body>