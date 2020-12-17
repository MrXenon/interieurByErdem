<?php
/**
 * Created by PhpStorm.
 * User: black
 * Date: 17-12-2020
 * Time: 16:04
 */

// checks if page exists and adds a line underneath the navigation link
function getCurrent()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'index.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent2()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'advies.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent3()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'kleur-en-verf-advies.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent4()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'materialen.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent5()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'services.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent6()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'over-ons.php') {
        echo 'current';
    } else {
        echo '';
    }
}

function getCurrent7()
{
    $link = basename($_SERVER['PHP_SELF']);
    if ($link == 'contact.php') {
        echo 'current';
    } else {
        echo '';
    }
}
?>