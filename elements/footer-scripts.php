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

    var cal = $( '#calendar' ).calendario( {
            onDayClick : function( $el, $contentEl, dateProperties ) {

                for( var key in dateProperties ) {
                    console.log( key + ' = ' + dateProperties[ key ] );
                }

            },
            caldata : canvasEvents
        }),
        $month = $( '#calendar-month' ).html( cal.getMonthName() ),
        $year = $( '#calendar-year' ).html( cal.getYear() );

    $( '#calendar-next' ).on( 'click', function() {
        cal.gotoNextMonth( updateMonthYear );
    } );
    $( '#calendar-prev' ).on( 'click', function() {
        cal.gotoPreviousMonth( updateMonthYear );
    } );
    $( '#calendar-current' ).on( 'click', function() {
        cal.gotoNow( updateMonthYear );
    } );

    function updateMonthYear() {
        $month.html( cal.getMonthName() );
        $year.html( cal.getYear() );
    };

</script>
