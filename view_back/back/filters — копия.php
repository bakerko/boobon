<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Filters</title>
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

<main class="container mobile_grid">
    <p class="path">Главная / Товары / Латексные шары</p>
    <p onclick="openFilter()"><b>Фильтр</b></p>


    <aside class="aside sidebar" id="filter_open">
        <p class="card-description"><b>ЛАТЕКСНЫЕ ШАРЫ</b></p>

        <hr>
        <div class="checkbox_filter">
            <input type="checkbox" id="plain" name="plain"
                   checked>
            <label for="plain">Однотонные</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="confetti" name="confetti">
            <label for="confetti">С конфетти </label>
        </div>
        <div class="checkbox_filter">
            <input type="checkbox" id="print" name="print">
            <label for="print">С принтом </label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="agate" name="agate">
            <label for="agate">Агат</label>
        </div>
        <div class="checkbox_filter">
            <input type="checkbox" id="chrome" name="chrome">
            <label for="chrome">Хром</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="brush" name="brush">
            <label for="brush">Браш</label>
        </div>

        <p class="card-description"><b>ЗВЕЗДЫ / СЕРДЦА / КРУГИ</b></p>
        <hr>
        <div class="sidebar">
            <div class="checkbox_filter">
                <input type="checkbox" id="pattern" name="pattern"
                       checked>
                <label for="pattern">С рисунком</label>
            </div>

            <div class="checkbox_filter">
                <input type="checkbox" id="sm45" name="sm45">
                <label for="sm45">45 см</label>
            </div>
            <div class="checkbox_filter">
                <input type="checkbox" id="star" name="star">
                <label for="star">Звезда</label>
            </div>

            <div class="checkbox_filter">
                <input type="checkbox" id="circle" name="circle">
                <label for="circle">Круг</label>
            </div>

            <div class="checkbox_filter">
                <input type="checkbox" id="heart" name="heart">
                <label for="heart">Сердце</label>
            </div>
        </div>
        <div class="float_right checkbox_filter">
            <div>
                <input type="checkbox" id="noPattern" name="noPattern">
                <label for="noPattern">Без рисунка</label>
            </div>

            <div class="checkbox_filter">
                <input type="checkbox" id="sm80" name="sm80">
                <label for="sm80">80 см</label>
            </div>
        </div>
        <div class="clear"></div>

        <p class="card-description"><b>ЦИФРЫ</b></p>
        <hr>

        <div class="noMargin_flexbox">
            <div class="color color-red"></div>
            <div class="color color-yellow"></div>
            <div class="color color-orange"></div>
            <div class="color color-violet"></div>
            <div class="color color-black"></div>
            <div class="color color-darkviolet"></div>
            <div class="color color-white"></div>
        </div>
        <div class="noMargin_flexbox checkbox_filter">
            <div>
                <input type="checkbox" id="sm1" name="sm80">
                <label for="sm80">45 см</label>
            </div>

            <div>
                <input type="checkbox" id="sm2" name="sm80">
                <label for="sm80">80 см</label>
            </div>
        </div>


        <p class="card-description"><b>БАБЛС И СФЕРЫ</b></p>
        <hr>

        <div class="checkbox_filter">
            <input type="checkbox" id="transparent" name="transparent"
                   checked>
            <label for="transparent">Прозрачные</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="colored" name="colored">
            <label for="colored">Цветные</label>
        </div>
        <div class="checkbox_filter">
            <input type="checkbox" id="monochrome" name="monochrome">
            <label for="monochrome">Однотонные</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="picture" name="picture">
            <label for="picture">С рисунком</label>
        </div>

        <p class="card-description"><b>ГИГАНТЫ</b></p>
        <hr>

        <div class="noMargin_flexbox">
            <div class="color color-red"></div>
            <div class="color color-yellow"></div>
            <div class="color color-orange"></div>
            <div class="color color-violet"></div>
            <div class="color color-black"></div>
            <div class="color color-darkviolet"></div>
            <div class="color color-white"></div>
        </div>
        <div class="noMargin_flexbox checkbox_filter">
            <div class="checkbox_filter">
                <input type="checkbox" id="sm3" name="sm80">
                <label for="sm80">45 см</label>
            </div>

            <div class="checkbox_filter">
                <input type="checkbox" id="sm4" name="sm80">
                <label for="sm80">80 см</label>
            </div>
        </div>

        <p class="card-description"><b>БОЛЬШИЕ КОРОБКИ ДЛЯ ШАРОВ</b></p>
        <hr>
        <div class="checkbox_filter">
            <input type="checkbox" id="open" name="open">
            <label for="open">Распадающиеся</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="solid" name="solid">
            <label for="solid">Цельные</label>
        </div>

        <p class="card-description"><b>ГОТОВЫЕ РЕШЕНИЯ</b></p>
        <hr>
        <div class="checkbox_filter">
            <input type="checkbox" id="man" name="man"
                   checked>
            <label for="man">Парню</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="woman" name="woman">
            <label for="woman">Девушке</label>
        </div>
        <div class="checkbox_filter">
            <input type="checkbox" id="baby" name="baby">
            <label for="baby">На выписку</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="wedding" name="wedding">
            <label for="wedding">Свадьба</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="bridal" name="bridal">
            <label for="bridal">Девичник</label>
        </div>
        <div class="checkbox_filter">
            <input type="checkbox" id="bd" name="bd">
            <label for="bd">День рождения</label>
        </div>

        <div class="checkbox_filter">
            <input type="checkbox" id="child" name="child">
            <label for="child">Ребёнку</label>
        </div>

    </aside>

    <section>
        <form class="right" action="select1.php" method="post">
            <label>Сортировать по: </label>
            <select name="sort">
                <option value='1'>Сначала дешёвые</option>
                <option value='2'>Сначала дорогие</option>
                <option value='3'>По рейтингу</option>
            </select>
        </form>
        <div class="wrapper">
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
            <div><img class="product_photo_item" src="/images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </div>
        </div>
        <div class="show"><img class="close_image show_more" src="/images/close.png" alt="">
            <p> Показать больше товаров</p></div>
    </section>


</main>
<?php $this->load->view('footer'); ?>  
<script src="/js/modal.js"></script>

</body>
</html>