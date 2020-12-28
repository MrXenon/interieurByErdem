<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 15-12-2020
 * Time: 11:01
 */

?>
<!-- Footer
============================================= -->
<footer id="footer" class="dark">
    <div class="container">
        <!-- Footer Widgets
        ============================================= -->
        <div class="footer-widgets-wrap">

            <div class="row col-mb-50">
                <div class="col-md-6 col-lg-4">

                    <div class="widget clearfix">

                        <a href="index.php"><img src="elements/logo/Interieur_By_erdem_Logo.png" alt="Image" class="footer-logo"></a>

                        <div style="background: url('') no-repeat center center; background-size: 100%;">
                            <address>
                                <strong>Locatie:</strong><br>
                                <a target="_blank" href="https://www.google.nl/maps/place/Langeweg+43,+4511+GB+Breskens/@51.3960546,3.551225,15.5z/data=!4m5!3m4!1s0x47c4993dbbe3f487:0xd68ec4d9a4763af2!8m2!3d51.3965715!4d3.5513147">
                                Langeweg 43,<br>
                                4511 GB Breskens<br>
                                </a>
                            </address>
                            <abbr title="Phone Number"><strong>Telefoonnummer:</strong></abbr> <a href="+31117308069">+31 (0) 117 308 069</a><br>
                            <abbr title="Email Address"><strong>E-mail:</strong></abbr> <a href="info@interieurbyerdem.nl">info@interieurbyerdem.nl</a>
                        </div>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="widget clearfix">
                        <h4>Klant Reviews</h4>

                        <div class="fslider testimonial no-image bg-transparent border-0 shadow-none p-0" data-animation="slide" data-arrows="false">
                            <div class="flexslider">
                                <div class="slider-wrap">
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="images/testimonials/3.jpg" alt="Customer Testimonails"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>Veel keuze en zeer vriendelijk!</p>
                                            <div class="testi-meta">
                                                Elise van der Lijke
                                                <span>Klant</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="images/testimonials/2.jpg" alt="Customer Testimonails"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>Natus voluptatum enim quod necessitatibus quis expedita harum provident eos obcaecati id culpa corporis molestias.</p>
                                            <div class="testi-meta">
                                                Collis Ta'eed
                                                <span>Envato Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="slide">
                                        <div class="testi-image">
                                            <a href="#"><img src="images/testimonials/1.jpg" alt="Customer Testimonails"></a>
                                        </div>
                                        <div class="testi-content">
                                            <p>Incidunt deleniti blanditiis quas aperiam recusandae consequatur ullam quibusdam cum libero illo rerum!</p>
                                            <div class="testi-meta">
                                                John Doe
                                                <span>XYZ Inc.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="widget clearfix">

                        <a href="https://www.facebook.com/vgverf"  target="_blank" class="social-icon si-small si-rounded si-facebook">
                            <i class="icon-facebook"></i>
                            <i class="icon-facebook"></i>
                        </a>

                        <a href="https://www.instagram.com/interieurbyerdem/?hl=nl" target="_blank" class="social-icon si-small si-rounded si-instagram">
                            <i class="icon-instagram"></i>
                            <i class="icon-instagram"></i>
                        </a>

                    </div>

                </div>

                <div class="col-md-6 col-lg-4">

                    <div class="widget quick-contact-widget form-widget clearfix">

                        <h4>Bericht versturen</h4>

                        <div class="form-result"></div>

                        <form id="quick-contact-form" name="quick-contact-form" action="include/form.php" method="post" class="quick-contact-form mb-0">

                            <div class="form-process">
                                <div class="css3-spinner">
                                    <div class="css3-spinner-scaler"></div>
                                </div>
                            </div>

                            <div class="input-group mx-auto">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-user"></i></div>
                                </div>
                                <input type="text" class="required form-control" id="quick-contact-form-name" name="quick-contact-form-name" value="" placeholder="Volledige naam" />
                            </div>
                            <div class="input-group mx-auto">
                                <div class="input-group-prepend">
                                    <div class="input-group-text"><i class="icon-email2"></i></div>
                                </div>
                                <input type="text" class="required form-control email" id="quick-contact-form-email" name="quick-contact-form-email" value="" placeholder="E-mail" />
                            </div>
                            <textarea class="required form-control input-block-level short-textarea" id="quick-contact-form-message" name="quick-contact-form-message" rows="4" cols="30" placeholder="Bericht"></textarea>
                            <input type="text" class="d-none" id="quick-contact-form-botcheck" name="quick-contact-form-botcheck" value="" />
                            <input type="hidden" name="prefix" value="quick-contact-form-">
                            <button type="submit" id="quick-contact-form-submit" name="quick-contact-form-submit" class="btn btn-erdem  m-0" value="submit">Versturen</button>

                        </form>

                    </div>

                </div>
            </div>

        </div><!-- .footer-widgets-wrap end -->
    </div>

    <!-- Copyrights
    ============================================= -->
    <div id="copyrights">
        <div class="container">

            <div class="row justify-content-between">
                <div class="col-12 col-lg-auto text-center text-lg-left">
                    <span class='copyright'>Gemaakt met veel ❤ en ☕ door <a href='https://3dynamisch.nl/' target='_blank'>
                            3Dynamisch © <?= date('Y') ?></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='https://www.instagram.com/3dynamisch/' target='_blank'>
                            <i class='icon-instagram' style='font-size: 18px;'></i></a>&nbsp;&nbsp;&nbsp;&nbsp;
                        <a href='https://nl-nl.facebook.com/3dynamisch/' target='_blank'><i class='icon-facebook' style='font-size: 18px;'>
                            </i></a>&nbsp;&nbsp;&nbsp;&nbsp;<a href='https://nl.linkedin.com/company/3dynamisch' target='_blank'>
                            <i class='icon-linkedin' style='font-size: 18px;'></i></a> </span>
                </div>

                <div class="col-12 col-lg-auto text-center text-lg-right">
                    <div class="copyrights-menu copyright-links mb-0">
                        <a href="index.php">Home</a>/<a href="advies.php">Advies</a>/<a href="kleur-en-verf-advies.php">Kleur & Verf Advies</a>/<a href="materialen.php">Materialen & Producten</a>/<a href="services.php">Services</a>/<a href="over-ons.php">Over Ons</a>/<a href="contact.php">Contact</a>/<a href="privacy-plugin/index.php">Privacy</a>
                    </div>
                </div>
            </div>

        </div>
    </div><!-- #copyrights end -->
</footer><!-- #footer end -->
