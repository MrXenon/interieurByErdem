<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 15-12-2020
 * Time: 11:03
 */
?>

<!-- Go To Top
============================================= -->
<div id="gotoTop" class="icon-angle-up"></div>

<!-- JavaScripts
============================================= -->
<script src="js/jquery.js"></script>
<script src="js/plugins.min.js"></script>
<script src="https://maps.google.com/maps/api/js?key=AIzaSyBmFz_AJmQ6h9uaJGrZEQKUTMQc5QAUyNQ"></script>
<script src="js/jquery.calendario.js"></script>
<script src="demos/nonprofit/js/events.js"></script>

<!-- Footer Scripts
============================================= -->
<script src="js/functions.js"></script>

<script>
    jQuery(document).ready( function($){
        var elementParent = $('.floating-contact-wrap');
        $('.floating-contact-btn, .btn-contact').off( 'click' ).on( 'click', function(e) {
            elementParent.toggleClass('active', );
            e.preventDefault(e);
        });
    });

</script>
