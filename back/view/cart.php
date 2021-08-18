<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/modal.js"></script>
    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
<?php $this->load->view('header'); ?>

<main class="container">
    <p class="path">Главная / Корзина</p>

    <div class="noMargin_flexbox tablet_cart">
        <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
            <a href=""><img class="baloon baloon_small" src="/images/1baloon.png"/></a>
            <p class="center mob_title">КОНФЕТТИ ГЛИТТЕР СЕРЕБРО</p>
            <div class="amount">
                <span class="down">-</span>
                <input type="text" value="1"/>
                <span class="up">+</span>
            </div>

            <p class="center mob_title"> 1,32 грн</p>
            <div><img class="close_image close_image_mob" src="/images/close_black.png" alt=""></div>
        </div>

        <div class="total tablet_total">
            <span class="font_xl">ВСЕГО</span>
            <div class="price float_right"><b>1,32 грн</b></div>
            <a href="/index.php/main/checkout"><button id="checkout" class="button black_button">ОФОРМИТЬ ЗАКАЗ</button></a>
            <a href="/index.php/main/"><button class="button white_button">ПРОДОЛЖИТЬ ПОКУПКИ</button></a>
        </div>
    </div>
    <form action="">
        <input class="check_item" type="checkbox" name="check1" value="checked1" checked>Добавить грузик<br>
        <input class="check_item" type="checkbox" name="check2" value="checked2">Добавить упаковку
    </form>
</main>
    
<?php $this->load->view('footer'); ?>  
<script src="/js/modal.js"></script>
</body>
</html>