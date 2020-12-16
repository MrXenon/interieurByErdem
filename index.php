<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 15-12-2020
 * Time: 10:45
 */
include 'elements/head.php'; ?>



<!-- Document Title
============================================= -->
<title>NonProfit Demo | Canvas</title>

</head>

<body class="stretched">

<!-- Document Wrapper
============================================= -->
<div id="wrapper" class="clearfix">

                    <!--Include navigation-->
                    <?php include 'elements/nav.php';?>


    <!-- Slider
    ============================================= -->
    <section id="slider" class="slider-element dark swiper_wrapper slider-parallax min-vh-75">
        <div class="slider-inner">

            <div class="swiper-container swiper-parent">
                <div class="swiper-wrapper">
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption">
                                <div>
                                    <h2 class="nott" data-animate="fadeInUp">Welkom bij Interieur by Erdem.</h2>
                                    <a href="over-ons.php" data-animate="fadeInUp" data-delay="400" class="button button-rounded button-large button-light shadow nott ls0 ml-0 mt-4">Meer weten</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('demos/nonprofit/images/slider/1.jpg') no-repeat center center; background-size: cover;"></div>
                    </div>
                    <div class="swiper-slide dark">
                        <div class="container">
                            <div class="slider-caption">
                                <div>
                                    <h2 class="nott" data-animate="fadeInUp">Wat kunnen wij voor u doen.</h2>
                                    <a href="services.php" data-animate="fadeInUp" data-delay="400" class="button button-rounded button-large button-light shadow nott ls0 ml-0 mt-4">Services</a>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background: linear-gradient(rgba(0,0,0,0), rgba(0,0,0,.8)), url('demos/nonprofit/images/slider/2.jpg') no-repeat center center; background-size: cover;"></div>
                    </div>
                </div>
                <div class="swiper-navs">
                    <div class="slider-arrow-left"><i class="icon-line-arrow-left"></i></div>
                    <div class="slider-arrow-right"><i class="icon-line-arrow-right"></i></div>
                </div>
                <div class="swiper-scrollbar">
                    <div class="swiper-scrollbar-drag">
                        <div class="slide-number"><div class="slide-number-current"></div><span>/</span><div class="slide-number-total"></div></div></div>
                </div>
            </div>

        </div>
    </section>

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap py-0" style="overflow: visible">

            <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none" style="position: absolute; top: -58px; left:0; z-index: 1"><path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z"/></svg>

            <div class="container">

                <div class="slider-feature w-100">
                    <div class="row justify-content-center">
                        <div class="col-md-3 px-1">
                            <a href="advies.php" class="card center border-left-0 border-right-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 font-weight-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-align-center"></i>Advies
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 px-1">
                            <a href="kleur-en-verf-advies.php" class="card center border-left-0 border-right-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 font-weight-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-umbrella"></i>Kleur & Verf Advies
                                </div>
                            </a>
                        </div>
                        <div class="col-md-3 px-1">
                            <a href="materialen.php" class="card center border-left-0 border-right-0 border-top-0 border-bottom border-bottom shadow py-3 rounded-0 font-weight-semibold text-uppercase ls1">
                                <div class="card-body">
                                    <i class="icon-line-mail"></i>Materialen & Producten
                                </div>
                            </a>
                        </div>
                    </div>
                </div>

            </div>

            <div class="section mt-3" style="background: #FFF url('demos/nonprofit/images/others/1.jpg') no-repeat 100% 50% / auto 100%;">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Home</h2>
                            </div>
                            <div class="svg-line bottommargin-sm">
                                <img src="demos/nonprofit/images/divider-1.svg" alt="svg divider" height="20">
                            </div>
                            <p>
                                Welkom bij Interieur By Erdem, dé interieurspeciaalzaak in Breskens en omstreken!
                                Bij ons kunt u alles vinden voor de inrichting van uw woning.
                                Wij zijn gespecialiseerd in het sfeervol op maat maken en aankleden van vloeren, wanden en ramen.
                                Wij werken met 1 team aan vaste vakmannen die samen hun krachten bundelen.
                                Hierdoor kunnen wij u zorgeloze en snelle service bieden die u verdient.
                                Onze persoonlijke en zorgvuldige aanpak maakt ons een uniek bedrijf.
                            </p>
                            </div>
                    </div>
                    <div class="row mt-5 col-mb-50 mb-0">
                        <div class="col-md-3">
                            <div class="feature-box flex-column pl-0">
                                <div class="fbox-media position-relative">
                                    <img src="demos/nonprofit/images/icons/donate.svg" alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Als u kiest voor kwaliteit</a></h3>
                                    <p>Door het gebruik van kwaliteitsverf gaat ons gepartnerd schildersbedrijf alleen voor het allerbeste.
                                        Gekozen werd voor Sikkens, een topper onder de verven, met Flexa als nevenmerk (in de categorie Sigma en Histor), beiden geproduceerd bij Akzo Nobel.
                                        Het Erkend Sikkens predicaat 2016 en 2017 (elk jaar controle) spreekt boekdelen over hun inzet.</p>
                                    <a href="kleur-en-verf-advies.php" class="button button-rounded button-border nott ls0 font-weight-normal ml-0 mt-4">Kleur & verd advies</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="feature-box flex-column pl-0">
                                <div class="fbox-media position-relative">
                                    <img src="demos/nonprofit/images/icons/volunteer.svg" alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Als u graag persoonlijk wordt geholpen</a></h3>
                                    <p>Wij komen graag persoonlijk bij de mensen langs om de diverse mogelijkheden te bespreken en advies te geven, ook bij kleine opdrachten.
                                        Iedere situatie of plek vraagt om een specifieke benadering. En daarbij willen wij graag van dienst zijn.
                                        Dat geldt niet alleen voor het schilderwerk, maar ook voor behangwerk.
                                        Wat moet er allemaal gebeuren voordat de muur behangen wordt?
                                        Wij kijken graag gedetailleerd met u mee.</p>
                                    <a href="services.php" class="button button-rounded button-border nott ls0 font-weight-normal ml-0 mt-4">Services</a>
                                </div>
                            </div>
                        </div>

                        <div class="col-md-3">
                            <div class="feature-box flex-column pl-0">
                                <div class="fbox-media position-relative">
                                    <img src="demos/nonprofit/images/icons/help-child.svg" alt="Featured Icon" width="60" class="mb-3">
                                </div>
                                <div class="fbox-content px-0">
                                    <h3 class="nott ls0"><a href="#" class="text-dark">Als u alles voor uw woning op één plaats wilt vinden</a></h3>
                                    <p>Bij Interieur By Erdem hebben we alles in huis om het de klant zo makkelijk mogelijk te maken.
                                        Men kan bij ons kiezen uit de vele mogelijkheden op alle gebieden van het wooncomfort.
                                        Wij helpen u graag bij het maken van de beste productkeuze voor de gewenste bestemming voor u en uw portemonnee.</p>
                                    <a href="materialen.php" class="button button-rounded button-border nott ls0 font-weight-normal ml-0 mt-4">Materialen & Producten</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="line line-sm my-0 clearfix"></div>
            <div class="clear"></div>
            <div class="section section-details mb-0 bg-white" style="padding: 80px 0 160px;">
                <div class="w-100 h-100 d-none d-md-block" style="position: absolute; top: 0; left: 0; background: #FFF url('demos/nonprofit/images/others/6.jpg') no-repeat bottom right / cover;"></div>
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-md-8 px-8 mb-10">
                            <h3 class="font-weight-medium mb-4 center">Interieur By Erdem, voor al uw woonwensen! </h3>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4 px-4 mb-5">
                            <p>Interieur By Erdem, zo luidt sinds 1 januari 2020 de nieuwe naam van de verf-en woonwinkel aan de Langeweg te Breskens.
                                De naam is veranderd, maar verder zijn er nauwelijks wijzigingen.
                                Kwaliteit en service zijn nog steeds hetzelfde gebleven en staan nog altijd voorop, evenals de gastvrijheid en klantvriendelijkheid van eigenaresse Ikram Erdem. </p>
                        </div>

                        <div class="col-md-4 px-4 mb-5">
                            <p>Interieur By Erdem heeft zoveel te bieden dat het voor haar klanten weleens moeilijk is om een keuze te maken.
                                ‘’Samen komen we er altijd uit’’, garandeert Ikram. ‘’Ik ben altijd bereid om vrijblijvend vragen te beantwoorden over woonwensen.
                                Dat is onderdeel van de service die ik aanbied. Ik ben klantvriendelijk en afspraak is afspraak’’. </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>




            <div class="clear"></div>

            <div class="container-fluid my-5 clearfix">
                <div class="d-flex flex-column align-items-center justify-content-center center counter-section position-relative py-5" style="background: url('demos/nonprofit/images/world-map.png') no-repeat center center/ contain">
                    <div class="mx-auto center" style="max-width: 1000px">
                        <h3>Onze persoonlijke en zorgvuldige aanpak maakt ons een uniek bedrijf.</h3>
                    </div>

                    <div class="row align-items-stretch m-0 w-100 clearfix">

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="demos/nonprofit/images/icons/breakfast.svg" alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="11265" data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Producten geleverd</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="demos/nonprofit/images/icons/volunteers.svg" alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="16265" data-refresh-interval="50" data-speed="2200" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Tevreden klanten</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="demos/nonprofit/images/icons/educated.svg" alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="100" data-to="3500" data-refresh-interval="25" data-speed="2300" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Adviezen gegeven</u></h5>
                        </div>

                        <div class="col-lg-3 col-sm-6 center mt-5">
                            <img src="demos/nonprofit/images/icons/shelter.svg" alt="Counter Icon" width="70" class="mb-4">
                            <div class="counter font-secondary"><span data-from="150" data-to="1500" data-refresh-interval="50" data-speed="2100" data-comma="true"></span>+</div>
                            <h5 class="nott ls0 mt-0"><u>Klanten geholpen bij installatie</u></h5>
                        </div>

                    </div>
                </div>
            </div>

            <div class="clear"></div>

            <div class="section" style="background: url('demos/nonprofit/images/others/section-bg.jpg') no-repeat center center / cover; padding: 80px 0;">
                <div class="container clearfix">
                    <div class="row">
                        <div class="col-lg-8">
                            <h3 class="mb-2">Onze diensten</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="demos/nonprofit/images/divider-1.svg" alt="svg divider" height="10">
                            </div>
                            <p class="mb-5">Hieronder kunt u de diensten vinden die wij bij Interieur By Erdem uitvoeren.</p>
                            <div class="row mission-goals gutter-30 mb-0">
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 mr-4">
                                            <img src="demos/nonprofit/images/icons/home.svg" alt="Featured Icon 1" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="advies.php" class="text-dark">Advies</a></h3>
                                            <p>Het kan voorkomen dat u vragen heeft over materialen die u gebruikt en of deze wel goed zijn voor uw constructie of hoe u iets moet plaatsen.
                                            Op al deze vragen kunnen wij u een antwoord geven. Wacht niet langer en stel uw vraag!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 mr-4">
                                            <img src="demos/nonprofit/images/icons/health.svg" alt="Featured Icon 2" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="kleur-en-verf-advies.php" class="text-dark">Kleur & Verf Advies</a></h3>
                                            <p>Heeft u specifiek advies over de kleuren die u gebruikt of wat u nou het beste kan doen bij het schilderen van een muur.
                                                Deze vragen en meer kunnen wij voor u beantwoorden.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 mr-4">
                                            <img src="demos/nonprofit/images/icons/education.svg" alt="Featured Icon 3" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="materialen.php" class="text-dark">Materialen/Producten</a></h3>
                                            <p>Welke materialen en producten kunnen wij u leveren? Alles hierover vind u hier.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="feature-box fbox-plain bg-white mx-0">
                                        <div class="fbox-media position-relative col-auto p-0 mr-4">
                                            <img src="demos/nonprofit/images/icons/animal.svg" alt="Featured Icon 4" width="50">
                                        </div>
                                        <div class="fbox-content">
                                            <h3 class="nott ls0"><a href="services.php" class="text-dark">Services</a></h3>
                                            <p>Heeft u hulp nodig? Een van onze services is u helpen bij uw plaatsing.</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4 mt-5 mt-lg-0">
                            <h3 class="mb-2">Latest Videos</h3>
                            <div class="svg-line mb-2 clearfix">
                                <img src="demos/nonprofit/images/divider-1.svg" alt="svg divider" height="10">
                            </div>
                            <p class="mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit excepturi ipsa!</p>
                            <div class="clear"></div>
                            <a href="https://www.youtube.com/watch?v=VqmFKnHG5q8" data-lightbox="iframe" class="shadow-sm d-flex align-items-center justify-content-center play-video rounded position-relative bg-color mt-3 clearfix" style="background: linear-gradient(rgba(0,0,0,.05), rgba(0,0,0,.01)), url('demos/nonprofit/images/others/5.jpg') no-repeat center center / cover; height: 300px"><i class="icon-play"></i></a>
                        </div>
                    </div>
                </div>
            </div>

            <div class="section bg-transparent">
                <div class="container clearfix">
                    <div class="row justify-content-center mb-5">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Onze Werknemers</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="demos/nonprofit/images/divider-1.svg" alt="svg divider" height="20">
                            </div>
                            <p>Ikram gaat voor topkwaliteit en laat niets aan het toeval over.  Als het nodig is roept ze de hulp van specialisten in.
                                Zo maakt ze gebruik van vakmensen om vloeren te leggen en het plaatsen van raamdecoraties gebeurt over het algemeen door de montagedienst.
                                In de winkel verkoopt ze verf van de gekende merken zoals Sikkens en Flexa. Uiteraard is er een verfmengmachine die nog veel meer mogelijk maakt.
                                ‘’Als ik iets niet in voorraad heb, dan kan dat uiteraard altijd besteld worden, waarna het binnen een of twee dagen geleverd wordt.’’ </p>
                        </div>
                    </div>
                    <div class="row justify-content-around">
                        <div class="col-lg-2 col-md-4 col-6">
                            <div class="team overflow-hidden">
                                <div class="team-image">
                                    <img src="elements/vg-images/Verfwinkel-VG-Wonen-Breskens-8-e1503563837339-1024x753.jpg" alt="Ikram Erdem">
                                </div>
                                <div class="team-desc">
                                    <h4 class="team-title pt-3 mb-0 font-weight-medium nott">Ikram Erdem<small>Eigenaar</small></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section bg-transparent" style="padding: 80px 0">
                <div class="container clearfix">
                    <div class="row justify-content-center">
                        <div class="col-md-7 center">
                            <div class="heading-block border-bottom-0 mb-4">
                                <h2 class="mb-4 nott">Wij werken met deze merken</h2>
                            </div>
                            <div class="svg-line bottommargin-sm clearfix">
                                <img src="demos/nonprofit/images/divider-1.svg" alt="svg divider" height="15">
                            </div>
                            <p>Natuurlijk kunt u altijd een ander merk nemen, echter wij raden de volgende merken aan.
                                Wij werken ook regelmatig met deze merken, waar wij een goede ervaring mee hebben.
                                Hierdoor kunnen wij u ook tot in detail uitleggen wat het product kan en wat dit voor u oplevert.</p>
                        </div>
                        <div class="clear"></div>
                        <div class="col-md-11 my-5">
                            <ul class="clients-grid grid-2 grid-sm-3 grid-md-5 mb-0">
                                <li class="grid-item"><a href="#"><img src="images/clients/1.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/2.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/3.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/4.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/5.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/6.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/7.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/8.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/9.png" alt="Clients"></a></li>
                                <li class="grid-item"><a href="#"><img src="images/clients/10.png" alt="Clients"></a></li>
                            </ul>
                        </div>
                        <h5 class="font-weight-normal text-black-50 mb-0">Wilt u met ons samenwerken? <a href="contact.php"><u>Verstuur ons dan uw gegevens</u></a>.</h5>
                    </div>
                </div>
            </div>


    </section><!-- #content end -->

<?php
include 'elements/footer.php';
include 'elements/floating-contact.php';
?>



</div><!-- #wrapper end -->

<?php
include 'elements/footer-scripts.php';
?>


</body>
</html>
