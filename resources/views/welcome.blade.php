@extends('layout.app')
@section('body')

    <header>
        <div class="wrapper">

            <div class="logo">

                <a href="">
                    <img src="/images/logo.png" alt="Geru logo">
                </a>
            </div>
            <x-Nav />
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
        <x-boxes />
        <div class="row-dark">
            <div class="wrapper">
                <p>Naše služby</p>
                <h2>Váš domov si zaslúži ochranu aj krásu – my vám ukážeme ako</h2>
                <div class="flex-container">

                    <div class="section">
                        <img src="/images/rowImages/1.jpg" alt="services">
                        <p class="section-title">Obnova strechy</p>
                        <p class="description">Spoľahlivé a trvácne riešenia strešných náterov pre dlhodobú ochranu.
                            Osviežte svoju strechu prémiovými produktmi GERU!</p>
                        <p class="info"><a href="">Viac informácií - GERULAN®21 Strešný náter</a></p>
                    </div>
                    <div class="section">
                        <img src="/images/rowImages/2.jpg" alt="services">
                        <p class="section-title">Obnova fasády</p>
                        <p class="description">Chráňte fasádu svojho domova inovatívnymi nátermi GERU, ktoré zabezpečia
                            dlhodobú čistotu a estetický vzhľad.</p>
                        <p class="info"><a href="">Viac informácií - GERULAN® AlchemillaPerl Fasádny náter</a></p>
                    </div>

                    <div class="break"></div>
                    <div class="flex-container">
                        <div class="section">
                            <p>Geru</p>
                            <h1>Prečo si vybrať práve nás?</h1>
                            <p>GERU je inovatívna spoločnosť so sídlom v Nemecku, ktorá už viac ako 35 rokov patrí medzi
                                lídrov vo vývoji strešných a fasádnych náterov.</p>
                            <p>Naša misia: <br>
                                Poskytovať cenovo dostupné, kvalitné a udržateľné riešenia pre majiteľov nehnuteľností,
                                vďaka ktorým si ich dom zachová svoju hodnotu.</p>
                            <ul class="list-with-image-style">
                                <li>
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-alt-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z">
                                        </path>
                                    </svg>
                                    Desaťročia skúseností
                                </li>
                                <li>
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-alt-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z">
                                        </path>
                                    </svg>
                                    Používame len materiály najvyššej kvality
                                </li>
                                <li>
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-alt-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z">
                                        </path>
                                    </svg>
                                    Dlhodobá ochrana
                                </li>
                                <li>
                                    <svg aria-hidden="true" class="e-font-icon-svg e-fas-arrow-alt-circle-right"
                                        viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                        <path
                                            d="M256 8c137 0 248 111 248 248S393 504 256 504 8 393 8 256 119 8 256 8zM140 300h116v70.9c0 10.7 13 16.1 20.5 8.5l114.3-114.9c4.7-4.7 4.7-12.2 0-16.9l-114.3-115c-7.6-7.6-20.5-2.2-20.5 8.5V212H140c-6.6 0-12 5.4-12 12v64c0 6.6 5.4 12 12 12z">
                                        </path>
                                    </svg>
                                    Moderné riešenia s dôrazom na estetiku
                                </li>
                            </ul>
                        </div>
                        <div class="section">
                            <img src="/images/rowImages/3.png" alt="services">

                        </div>


                    </div>

                </div>
            </div>
        </div>
        <div class="row-house">
            <div class="wrapper">

                @php
                $galleryImages = [
                    ['url' => asset('images/gallery/1.jpg'), 'alt' => 'Első kép'],
                    ['url' => asset('images/gallery/2.jpg'), 'alt' => 'Második kép'],
                    ['url' => asset('images/gallery/3.jpg'), 'alt' => 'Harmadik kép'],
                    ['url' => asset('images/gallery/4.jpg'), 'alt' => 'Negyedik kép'],
                    ['url' => asset('images/gallery/5.jpg'), 'alt' => 'Ötödik kép'],
                    ['url' => asset('images/gallery/6.jpg'), 'alt' => 'Hatodik kép'],
                    ['url' => asset('images/gallery/7.jpg'), 'alt' => 'Hetedik kép'],
                    ['url' => asset('images/gallery/8.jpg'), 'alt' => 'Nyolcadik kép'],
                    ['url' => asset('images/gallery/9.jpg'), 'alt' => 'Kilencedik kép'],
                    ['url' => asset('images/gallery/10.jpg'), 'alt' => 'Tizedik kép'],
                ];
                    $examplesImages = [
                        ['url' => asset('images/examples/1.jpg'), 'alt' => 'Első kép'],
                        ['url' => asset('images/examples/2.jpg'), 'alt' => 'Második kép'],
                        ['url' => asset('images/examples/3.jpg'), 'alt' => 'Harmadik kép'],
                        ['url' => asset('images/examples/4.jpg'), 'alt' => 'Negyedik kép'],
                        ['url' => asset('images/examples/5.jpg'), 'alt' => 'Ötödik kép'],
                    ];
                    $refImages = [
                        ['url' => asset('images/ref/1.jpg'), 'alt' => 'Első kép'],
                        ['url' => asset('images/ref/2.jpg'), 'alt' => 'Második kép'],
                        ['url' => asset('images/ref/3.jpg'), 'alt' => 'Harmadik kép'],
                        ['url' => asset('images/ref/4.jpg'), 'alt' => 'Negyedik kép'],
                    ];
                @endphp
                <x-image-carousel title="Reference" subtitle="Rekonštrukcia fasády – Porovnanie pred a po realizácii"
                    :images="$refImages" />
                <x-image-carousel title="Ukážky našich realizácií" subtitle="Obnova strechy – Porovnanie pred a po realizácii" :images="$examplesImages" />
                <x-image-carousel title="Fotogaléria" subtitle="Pozrite si našu galériu prác." :images="$galleryImages" />

            </div>
        </div>

        <div class="row-transparent">
            <div class="wrapper text-center">
                <p>Neviete, kde začať?</p>
                <h2>Postaráme sa o vašu strechu aj fasádu <br>
                    efektívne a dlhotrvajúco</h2>
            </div>
        </div>

        <div class="row-signup">
            <div class="wrapper">

                <x-contact-form :sended="$sended" />
            </div>
        </div>
    </main>
    <x-footer />
@endsection