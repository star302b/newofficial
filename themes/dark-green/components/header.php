<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>New Official Site</title>

    <?php

    function url(){
        return sprintf(
            "%s://%s%s",
            isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != 'off' ? 'https' : 'http',
            $_SERVER['SERVER_NAME'],
            $_SERVER['REQUEST_URI']
        );
    }

    ?>

    <base href="<?php echo url(); ?>">



    <!--Fonts Control-->
    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css" integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous"/>

    <link rel="stylesheet" href="assets/css/style.min.css">

</head>
<body>


<header class="site-header">
    <div class="container">
        <div class="flex-xs-row flex-justify-between flex-align-center">
            <div class="site-logo">
                <a href="/">
                    <img width="385" height="53" src="/assets/img/bitsoft-logo.png" alt="bitcoin-motion">
                </a>
            </div>
            <div class="header-right-block">
                <div class="site-menu inline-ul">
                    <ul>
                        <li class="right-offset"><a href="#login" class="js--open-modal button button-light">Login</a></li>
                        <li><a href="#register" class="js--open-modal button button-primary">Register</a></li>
                    </ul>
                </div>
                <div class="language">
                <span>
                    <img src="/assets/img/flags/en.png" alt=""> EN <i class="iti__arrow"></i>
                </span>
                    <ul class="language-list">
                        <li>
                            <a class="language-list__link" href="#">
                                <img src="/assets/img/flags/en.png" alt="">
                                EN
                            </a>
                        </li>
                        <li>
                            <a class="language-list__link" href="/de/">
                                <img src="/assets/img/flags/de.png" alt="">
                                DE
                            </a>
                        </li>
                        <li>
                            <a class="language-list__link" href="#">
                                <img src="/assets/img/flags/nl.png" alt="">
                                NL
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</header>