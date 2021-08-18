<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Card</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/modal.js"></script>
    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
<?php $this->load->view('header'); ?>

<main class="container">
    <p class="path">Главная / Товары / Латексные шары</p>

    <aside class="flex_wrap">
        <div class="item1"><img class="mob_baloon" src="/images/1baloon.png" height="445" width="445"/></div>
        <div><img class="mob_small_baloon" src="/images/1baloon.png" height="139" width="139"/></div>
        <div><img class="mob_small_baloon" src="/images/1baloon.png" height="139" width="139"/></div>
        <div><img class="mob_small_baloon none" src="/images/1baloon.png" height="139" width="139"/></div>
    </aside>

    <section class="product_description">
        <div class="product_description_top">
            <p class="text_description_title"><b>КОНФЕТТИ ГЛИТТЕР СЕРЕБРО</b></p>
            <p>Артикул : 2536 6654</p>
            <hr>
            <div class="noMargin_flexbox center btn">
                <div class="amount">
                    <span class="down">-</span>
                    <input type="text" value="1" />
                    <span class="up">+</span>
                </div>
                <p class="no_margin text_description_title"><b>1,32 грн</b></p>
                <button class="button buy_button no_margin"><img class="button_icon invert_color" src="/images/Cart-1.png"/> Купить
                </button>
            </div>
            <hr>
            <div>
                <table style="width:100%">
                    <tr>
                        <td class="description_cell" >Исходный материал</td>
                        <td  class="right_side_table description_cell">Натуральный латекс</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Страна</td>
                        <td class="right_side_table description_cell">Италия</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Размер</td>
                        <td class="right_side_table description_cell">10¨</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Летает с гелием</td>
                        <td class="right_side_table description_cell">15 ч</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Исходный материал</td>
                        <td class="right_side_table description_cell">Натуральный латекс</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Страна</td>
                        <td class="right_side_table description_cell">Италия</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Размер</td>
                        <td class="right_side_table description_cell">10¨</td>
                    </tr>
                    <tr>
                        <td class="description_cell">Летает с гелием</td>
                        <td class="right_side_table description_cell">15 ч</td>
                    </tr>
                </table>
                <hr>
            </div>
        </div>
        <div class="product_description_bottom path">
            <table style="width:100%">
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/ballon.png" alt=""> <span class="bottom_descr_style">Технология долгого полета</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/delivery.png" alt=""> <span class="bottom_descr_style">Доставим уже через 3 час</span></td>
                </tr>
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/quality.png" alt=""> <span class="bottom_descr_style">Высокое качество</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/sale.png" alt=""> <span class="bottom_descr_style">Самовывоз - скидка 5%</span></td>
                </tr>
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/shield.png" alt=""> <span class="bottom_descr_style">Наши гарантии</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/pay.png" alt=""> <span class="bottom_descr_style">Оплата любым  способом</span></td>
                </tr>
            </table>
        </div>

    </section>
    <div class="text_description adaptive_float">
        <p class="text_description_title"><b>Описание</b></p>
        <p>
            Будет описание Вашего товара, Будет описание Вашего товара, Будет описание Вашего товара, Будет описание
            Вашего товара, Будет описание Вашего товара, Будет описание Вашего товара, Будет описание Вашего товара,
            Будет описание Вашего товара, Будет описание Вашего товара, Будет описание Вашего товара, Будет описание
            Вашего товара,
            Будет описание Вашего товара, Будет описание Вашего товара, Будет описание Вашего товара,
            Будет описание Вашего товара, Будет описание Вашего товара,
        </p>
    </div>

</main>
<?php $this->load->view('footer'); ?>  
    <script src="/js/modal.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/index.js"></script>
</body>
</html>