<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 15-12-2020
 * Time: 11:02
 */

?>
<!-- Floating Contact
    ============================================= -->
<div class="floating-contact-wrap">
    <div class="floating-contact-btn shadow">
        <i class="floating-contact-icon btn-unactive icon-envelope21"></i>
        <i class="floating-contact-icon btn-active icon-line-plus"></i>
    </div>
    <div class="floating-contact-box">
        <div id="q-contact" class="widget quick-contact-widget clearfix">
            <div class="floating-contact-heading bg-color p-4 rounded-top">
                <h3 class="mb-0 font-secondary h2 ls0">Snel contact opnemen</h3>
                <p class="mb-0">Neem contact met ons op</p>
            </div>
            <div class="form-widget bg-white" data-alert-type="false">
                <div class="form-result"></div>
                <div class="floating-contact-loader css3-spinner" style="position: absolute;">
                    <div class="css3-spinner-bounce1"></div>
                    <div class="css3-spinner-bounce2"></div>
                    <div class="css3-spinner-bounce3"></div>
                </div>
                <div id="floating-contact-submitted" class="p-5 center">
                    <i class="icon-line-mail h1 color"></i>
                    <h4 class="font-weight-normal mb-0 font-body">Bedankt voor uw bericht, wij nemen zo snel mogelijk contact met u op</h4>
                </div>
                <form class="mb-0" id="floating-contact" action="include/form.php" method="post" enctype="multipart/form-data">
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class="icon-user-alt"></i></span>
                        </div>
                        <input type="text" name="floating-contact-name" id="floating-contact-name" class="form-control required" value="" placeholder="Voer uw volledige naam in">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class="icon-at"></i></span>
                        </div>
                        <input type="email" name="floating-contact-email" id="floating-contact-email" class="form-control required" value="" placeholder="Voer uw e-mail in">
                    </div>
                    <div class="input-group mb-3">
                        <div class="input-group-prepend">
                            <span class="input-group-text bg-transparent"><i class="icon-comment21"></i></span>
                        </div>
                        <textarea name="floating-contact-message" id="floating-contact-message" class="form-control required" cols="30" rows="4"></textarea>
                    </div>
                    <input type="hidden" id="floating-contact-botcheck" name="floating-contact-botcheck" value="" />
                    <button type="submit" name="floating-contact-submit" class="btn btn-dark btn-block py-2">Verstuur bericht</button>
                    <input type="hidden" name="prefix" value="floating-contact-">
                    <input type="hidden" name="subject" value="Messgae From Floating Contact">
                    <input type="hidden" name="html_title" value="Floating Contact Message">
                </form>
            </div>
        </div>
    </div>
</div>
