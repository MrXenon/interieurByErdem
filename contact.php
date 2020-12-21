<?php
include 'elements/head.php'; ?>

<!-- Document Meta tags (SEO)
============================================= -->
<meta name="title" content="Contact | Interieur By Erdem">
<meta name="description" content="heeft u een vraag of wilt u meer weten? Hier kunt u contact opnemen met Interieur By Erdem.">
<meta name="keywords" content="Interieur contact Erdem">
<meta name="robots" content="index, follow">

    <!-- Document Title
    ============================================= -->
    <title>Contact | Interieur By Erdem</title>

</head>
<?php include 'elements/gdpr.php'; ?>
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
                                    <h2 class="nott" data-animate="fadeInUp">CONTACT</h2>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-slide-bg" style="background: linear-gradient(rgba(0,0,0,.3), rgba(0,0,0,.5)), url('elements/slider/pexels-ksenia-chernaya-5691680 (1).jpg') no-repeat center center; background-size: cover;"></div>
                    </div>
                </div>
            </div>

        </div>

    </section><!-- #page-title end -->

    <!-- Content
    ============================================= -->
    <section id="content">
        <div class="content-wrap py-0 overflow-visible">

            <svg viewBox="0 0 1382 58" width="100%" height="60" preserveAspectRatio="none" style="position: absolute; top: -58px; left:0; z-index: 1"><path style="fill:#FFF;" d="M1.52.62s802.13,127,1380,0v56H.51Z"/></svg>

            <div class="container clearfix">

                <div class="row align-items-stretch col-mb-50 mb-0">
                    <!-- Contact Form
                    ============================================= -->
                    <div class="col-lg-6" style="margin-top:30px;">

                        <div class="">
                            <p>
                                Bent u ook benieuwd naar wat wij voor uw wooncomfort kunnen betekenen? Neem gerust contact met ons op en vraag naar de mogelijkheden voor advies, decoratie en/of een vrijblijvende offerte!
                            </p>
                            <blockquote>
                                Interieur By Erdem levert maatwerk.
                            </blockquote>
                        </div>
                        <div class="fancy-title title-border">
                            <h3>Neem contact op</h3>
                        </div>

                        <div class="form-widget">

                            <div class="form-result"></div>

                            <form class="mb-0" id="template-contactform" name="template-contactform" action="include/form.php" method="post">

                                <div class="form-process">
                                    <div class="css3-spinner">
                                        <div class="css3-spinner-scaler"></div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-name">Naam <small>*</small></label>
                                        <input type="text" id="template-contactform-name" name="template-contactform-name" value="" class="sm-form-control required" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-email">E-mail <small>*</small></label>
                                        <input type="email" id="template-contactform-email" name="template-contactform-email" value="" class="required email sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-phone">Telefoonnummer</label>
                                        <input type="text" id="template-contactform-phone" name="template-contactform-phone" value="" class="sm-form-control" />
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-md-8 form-group">
                                        <label for="template-contactform-subject">Onderwerp <small>*</small></label>
                                        <input type="text" id="template-contactform-subject" name="subject" value="" class="required sm-form-control" />
                                    </div>

                                    <div class="col-md-4 form-group">
                                        <label for="template-contactform-service">Diensten</label>
                                        <select id="template-contactform-service" name="template-contactform-service" class="sm-form-control">
                                            <option value="">-- Selecteer --</option>
                                            <option value="Kleur advies">Kleur advies</option>
                                            <option value="Advies plaatsing">Advies plaatsing</option>
                                            <option value="Materialen / Producten">Materialen / Producten</option>
                                            <option value="Services">Services</option>
                                        </select>
                                    </div>

                                    <div class="w-100"></div>

                                    <div class="col-12 form-group">
                                        <label for="template-contactform-message">Bericht <small>*</small></label>
                                        <textarea class="required sm-form-control" id="template-contactform-message" name="template-contactform-message" rows="6" cols="30"></textarea>
                                    </div>

                                    <div class="col-12 form-group d-none">
                                        <input type="text" id="template-contactform-botcheck" name="template-contactform-botcheck" value="" class="sm-form-control" />
                                    </div>

                                    <div class="col-12 form-group">

                                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                                        <div class="g-recaptcha" data-sitekey="6LfijgUTAAAAACPt-XfRbQszAKAJY0yZDjjhMUQT"></div>

                                    </div>

                                    <div class="col-12 form-group">
                                        <button name="submit" type="submit" id="submit-button" tabindex="5" value="Submit" class="button button-3d m-0">Bericht versturen</button>
                                    </div>
                                </div>

                                <input type="hidden" name="prefix" value="template-contactform-">

                            </form>
                        </div>

                    </div><!-- Contact Form End -->

                    <!-- Google Map
                    ============================================= -->
                    <div class="col-lg-6 min-vh-50" style="margin-top:30px;">
                        <div class="gmap h-100" data-address="Langeweg 43,Breskens, Nederland" data-zoom="14" data-markers='[{address: "Langeweg 43,Breskens, Nederland", html: "<div class=\"p-2\" style=\"width: 300px;\"><h4 class=\"mb-2\">Hi! We are <span>Envato!</span></h4><p class=\"mb-0\" style=\"font-size:1rem;\">Our mission is to help people to <strong>earn</strong> and to <strong>learn</strong> online. We operate <strong>marketplaces</strong> where hundreds of thousands of people buy and sell digital goods every day.</p></div>", icon:{ image: "images/icons/map-icon-red.png", iconsize: [32, 39], iconanchor: [32,39] } }]'></div>
                    </div><!-- Google Map End -->
                </div>

                <!-- Contact Info
                ============================================= -->
                <div class="row col-mb-50">
                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-map-marker2"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Onze locatie
                                    <a target="_blank" href="https://www.google.nl/maps/place/Langeweg+43,+4511+GB+Breskens/@51.3960546,3.551225,15.5z/data=!4m5!3m4!1s0x47c4993dbbe3f487:0xd68ec4d9a4763af2!8m2!3d51.3965715!4d3.5513147">
                                        <span class="subtitle">Langeweg 43, <br>4511 GB Breskens</span></a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-phone3"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Bel met ons<a href="tel:+31117308069"><span class="subtitle">+31<br>(0) 117 308 069</span></a></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-mail"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Mail met ons<span class="subtitle"><a href="mailto:info@interieurbyerdem.nl">info@<br>interieurbyerdem.nl</a></span></h3>
                            </div>
                        </div>
                    </div>

                    <div class="col-sm-6 col-lg-3">
                        <div class="feature-box fbox-center fbox-bg fbox-plain">
                            <div class="fbox-icon">
                                <a href="#"><i class="icon-twitter2"></i></a>
                            </div>
                            <div class="fbox-content">
                                <h3>Follow on Twitter<span class="subtitle">2.3M Followers</span></h3>
                            </div>
                        </div>
                    </div>
                </div><!-- Contact Info End -->

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