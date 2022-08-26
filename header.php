<!DOCTYPE html>
<html lang="jp">
<head>
<meta charset="utf-8">
<meta charset="<?php bloginfo('charset'); ?>">

<title>Jumpei Portfolio</title>
<meta name="description" content="フリーランスでWeb制作を専門に活動しています。">

<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/common.css"></link>
<link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/css/style.css"></link>
<!-- <link rel="SHORTCUT ICON" href="<?php echo get_template_directory_uri(); ?>/img/favicon.png" /> -->
<!-- Google Fonts -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Lora&display=swap" rel="stylesheet">
<!-- Chart.js -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js"></script>
<!-- ====================== -->
<?php wp_head(); ?>
</head>

<body>
    <div class="c-loader-bg js-loader-bg">
        <div class="c-loader-dot js-loader-dot-wrap">
            <span></span>
            <span></span>
            <span></span>
        </div>
    </div>
    <header class="wrap al-center">
        <nav class="pc">
            <a href="/#about">About</a>
            <a href="/#works">Works</a>
            <a href="/#contact">Contact</a>
        </nav>
        <!-- Hamburger -->
        <div class="hamburger hamburger-single sp" id="Hamburger">
            <div class="hamburger__container">
                <span class="hamburger__top"></span>
                <span class="hamburger__middle"></span>
                <span class="hamburger__bottom"></span>
            </div>
        </div>

            <!-- Menu -->
        <div class="sp__menu sp">
            <div class="sp__menu__container">
                <div class="sp__menu__nav">
                <ul id="menu__hamburger__nav" class="sp__menu__ul">
                    <li><a href="/#about">About</a></li>
                    <li><a href="/#works">Works</a></li>
                    <li><a href="/#contact">contact</a></li>
                </ul>
            </div>
        </div>
    </header>