<?php header('Cache-Control: max-age=31536000'); ?>


<!doctype html>
<html lang="en">

<head>
    <noscript>
        <style>
            /**
            * Reinstate scrolling for non-JS clients
            */
            .simplebar-content-wrapper {
                overflow: auto;
            }
        </style>
    </noscript>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bundeled.css?ver=1" async>
    <link rel="stylesheet" href="./css/style.css?ver=1" async>
    <link rel="stylesheet" href="./css/responsive.css?ver=1" async>

    <?php
    $color = "#f7351d";
    //this is for Chrome, Firefox OS, Opera and Vivaldi
    echo '<meta name="theme-color" content="'.$color.'">';
    //Windows Phone **
    echo '<meta name="msapplication-navbutton-color" content="'.$color.'">';
    // iOS Safari
    echo '<meta name="apple-mobile-web-app-capable" content="yes">';
    echo '<meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">';
    
    
    ?>
