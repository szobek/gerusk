@extends('layout.app')
@section('body')
    <main>

        <div class="row-light">
            <div class="wrapper">
                <div class="flex-container">
                    <div class="column">
                        <p class="text-color-primary">STREŠNÝ NÁTER</p>
                        <h2>GERULAN®21 Strešný náter</h2>
                        <p>GERULAN®21 je špeciálny inovatív strešný náter, ktorý nielen vizuálne obnoví vašu strechu, ale
                            zároveň poskytne dlhodobú ochranu pred poveternostnými vplyvmi a znečistením.</p>
                        <p>GERULAN®21 je vysokovýkonný vodouriediteľný akrylátový náter, ktorý bol špeciálne vyvinutý pre
                            strechy z pálenej škridly a betónovej krytiny. Poskytuje vynikajúcu priľnavosť, pričom je odolný
                            voči extrémnym teplotným výkyvom a UV žiareniu.</p>
                    </div>

                    <div class="column">
                        <h2>Výhody:</h2>
                        <ul>
                            <li>Ochrana odolná voči poveternostným vplyvom: Zabraňuje tvorbe machu a rias.</li>
                            <li>Dlhá životnosť: Po celé roky si zachováva svoju pôvodnú farbu a lesk.</li>
                            <li>Cenovo výhodné riešenie: Výrazne lacnejšie ako kompletná výmena strechy.</li>
                            <li>Ekologický: Vďaka svojmu vodouriediteľnému zloženiu neobsahuje škodlivé rozpúšťadlá.</li>
                        </ul>
                        <a href="">
                            <button class="btn-base">Produktový list</button>
                        </a>
                    </div>

                </div>
            </div>
        </div>

        <div class="row-dark">
            <div class="wrapper">
                <p class="text-color-primary text-center text-bold">Staršia alebo nová strecha?</p>
                <h2 class="text-center text-bold">Rozdiel hovorí sám za seba!</h2>
                <p class="text-center">
                    Ako sa môže zo starej, machom pokrytej strechy stať povrch, ktorý vyzerá ako nový a je dokonale chránený
                    vďaka náteru GERULAN®21!
                </p>

                <div class="flex-container">
                    <div class="column gap-10">
                        <img src="{{ Vite::asset('resources/assets/images/rowImages/1.jpg') }}" alt=""
                            class="img-small block up">
                        <img src="{{ Vite::asset('resources/assets/images/rowImages/GERULAN21.jpg') }}" alt=""
                            class="img-small block up">
                    </div>
                    <div class="column wide-column ">
                        <h2>Úžasná premena v jedinom kroku!</h2>
                        <p>Na obrázku je jasne viditeľný rozdiel medzi starou, poveternostnými vplyvmi poškodenou strechou a
                            strechou zrenovovanou náterom GERULAN®21. Na ľavej strane je povrch strechy zostarnutý, pokrytý
                            machom, riasami a lišajníkmi, kvôli čomu škridly čoraz viac nasávajú vlhkosť. Na pravej strane
                            bol povrch očistený a ošetrený náterom GERULAN®21, ktorý poskytuje ochranu odpudzujúcu vodu a
                            odolnú voči UV žiareniu. Nový náter nielenže predlžuje životnosť strechy, ale aj esteticky
                            obnovuje jej vzhľad, pričom umožňuje povrchu voľne dýchať.</p>
                    </div>
                </div>
            </div>
        </div>

        <div class="row-light">
            <div class="wrapper">

                <div class="flex-container">
                    <div class="column">
                        <img src="{{ Vite::asset('resources/assets/images/work/1.jpg') }}" alt=""
                            class="img-medium block">
                    </div>
                    <div class="column">
                        <h2>1. Dôkladné čistenie a príprava</h2>
                        <p>Povrch strechy alebo fasády sa očistí vysokotlakovým prúdom vody, čím sa odstránia nečistoty,
                            mach, riasy a prach. Tým sa zabezpečí správna priľnavosť náteru. V prípade potreby používame aj
                            špeciálne čistiace prostriedky pre dosiahnutie optimálneho výsledku.</p>
                    </div>
                </div>

                <div class="flex-container">
                    <div class="column">
                        <h2>2. Oprava poškodení a predbežná úprava</h2>
                        <p>Poškodené alebo prasknuté miesta opravíme, aby bol náter rovnomerný a trvácny. Ak je to potrebné,
                            materiál pred aplikáciou náteru impregnované a základný náter zabezpečí dokonalý výsledok.</p>
                    </div>
                    <div class="column">
                        <img src="{{ Vite::asset('resources/assets/images/work/2.jpg') }}" alt=""
                            class="img-medium block">
                    </div>
                </div>

                <div class="flex-container">
                    <div class="column">
                        <img src="{{ Vite::asset('resources/assets/images/work/3.jpg') }}" alt=""
                            class="img-medium block">
                    </div>
                    <div class="column">
                        <h2>3. Nanášanie náteru v niekoľkých vrstvách</h2>
                        <p>Náter GERULAN®21 na strechu alebo náter GERULAN® AlchemillaPerl na fasádu sa nanáša špeciálnou
                            striekacou technológiou. Viacvrstvové nanášanie zabezpečuje správnu hrúbku a ochranu proti
                            poveternostným vplyvom.</p>
                    </div>
                </div>


                <div class="flex-container">
                    <div class="column">
                        <h2>4. Rýchle schnutie a dlhodobá ochrana</h2>
                        <p>Náter rýchlo schne a vytvára pružnú, no pevnú ochrannú vrstvu, ktorá odoláva UV žiareniu, zrážkam
                            a nečistotám. Vďaka hydrofóbnemu efektu zostáva povrch čistejší a dlhšie si zachováva estetický
                            vzhľad.</p>
                    </div>
                    <div class="column">
                        <img src="{{ Vite::asset('resources/assets/images/work/4.jpg') }}" alt=""
                            class="img-medium block">
                    </div>
                </div>

                <div class="flex-container justify-center gap-0">
                    <h1>Farby a individuálne možnosti</h1>
                    <p>Vyberte si z našich základných farieb alebo si objednajte jedinečné odtiene pre strešné a fasádne
                        nátery, aby ste svojej domácnosti dodali naozaj osobitý vzhľad!</p>
                </div>

                <x-tiles title="Základné farby" :images="$tiles1"/>
                <x-tiles title="Farby dostupné za príplatok" :images="$tiles2"/>
            </div>
        </div>
    </main>
@endsection