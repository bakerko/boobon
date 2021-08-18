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
<header>
    <nav class="top_nav">
        <div class="top_nav_bar container">
            <ul class="menu__box mob_menu">
                <li><a class="menu__item" href="#">Товары</a></li>
                <li><a class="menu__item" href="#">Доставка и оплата</a></li>
                <li><a class="menu__item" href="#">Вопросы и ответы</a></li>
                <li><a class="menu__item" href="#">Гарантии и возврат</a></li>
                <li><a class="menu__item" href="#">Контакты</a></li>
            </ul>
            <ul class="menu__box tel"><a href="tel:+38 (096) 207 84 83"><b> +38 (096) 207 84 83</b></a></ul>
        </div>

    </nav>
    <div class="search_block">
        <div class="container flexbox flex_mob">
            <div><a href=""><img class="logo" src="/images/logo.jpg"/></a></div>
            <div class="search_field">
                <input class="form-control" type="text" aria-label="Search">
                <img class="search_img" src="/images/search.png"/>
            </div>
            <a href="#">
                <div class="cart_box">
                    <img class="cart" src="/images/Cart.png" height="450" width="450"/>
                    <p><b>: 2000 грн</b></p>
                </div>
            </a>
        </div>
    </div>
    <div id="myBtn_side" class="mobile_only modal_centerBtn"><a class="button colorblack" href="#"> Оформить
        мероприятие</a>
    </div>
    <nav class="navbar">
        <ul class="blackbar topmenu container">
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="/images/ballon.svg"> Латексные шары</a>
            </li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="/images/balloon heart.png"/>
                Фольгированные шары</a></li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="/images/Celebrate.png"/> Товары для
                праздника</a></li>
            <li><a class="blackbar__item submenu_link" href="#"><img class="nav_icon star" src="/images/star.svg"/>
                Готовые решения</a><i class="fa fa-angle-down"></i>
                <ul class="submenu">
                    <li><a href="">Воздушные шары</a></li>
                    <li><a href="">Товары для праздника</a></li>
                </ul>
            </li>
            <li id="myBtn" class="btn ipad_button"><a class="blackbar__item button colorblack" href="#"> Оформить
                мероприятие</a>
            </li>
        </ul>
        <div id="myModal" class="modal">

            <div class="modal-content">
                <img class="close" src="/images/close.png" alt=""></span>
                <img class="modal_logo" src="/images/logo.jpg" alt="">
                <form action="">
                    <input class="modal_input" type="text" id="name" name="name" placeholder="Ваше имя">
                    <input class="modal_input" type="text" id="tel" name="tel" placeholder="Ваш телефон">
                    <input class="modal_input modal_text" type="text" id="text" name="text"
                           placeholder="Текст Текст текст какой-то текст ...............">
                    <button class="black_button modal_btn">Заказать оформление</button>
                </form>
            </div>

        </div>
        <div id="mySidenav" class="mobile_only sidenav ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Латексные шары</a>
            <a href="#">Фольгированные шары</a>
            <a href="#">Товары для праздника</a>
            <a href="#">Готовые решения</a>
        </div>
        <p class=" mobile_only side_menu" onclick="openNav()">MENU</p>

    </nav>
</header>

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
<footer class="footer">
    <div class="flexbox container footer_landscape">
        <ul class="footer_landscape_item">
            <li class="title">ПОКУПАТЕЛЯМ</li>
            <li class="footer_link"><a class="blackbar__item" href="">Доставка и оплата</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Каталог товаров</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Вопросы и ответы</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Гарантия и возврат</a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">КОМПАНИЯ</li>
            <li class="footer_link"><a class="blackbar__item" href="">О нас</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Контакты</a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">КОНТАКТЫ</li>
            <li class="footer_link"><a class="blackbar__item" href="tel:+38 (096) 207 84 83"><i class="fas fa-phone"></i> +38 (063)
                000-00-00</a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><i class="fas fa-envelope"></i> shop@shop.com</a>
            </li>
            <li class="footer_link insta_link"><a class="blackbar__item button" href=""><img class="colored_icon"
                                                                                             src="/images/instagram-sketched.png"
                                                                                             alt=""><span
                    class="goToInsta">ПЕРЕЙТИ В INSTAGRAM</span> </a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">ПИШИТЕ НАМ</li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon" src="/images/viber.svg"
                                                                           alt=""><span
                    class="goToInsta">Viber</span></a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon"
                                                                           src="/images/telegram.svg" alt=""><span
                    class="goToInsta">Telegram</span></a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon chat"
                                                                           src="/images/chat.png" alt=""><span
                    class="goToInsta">Чат на сайте</span></a></li>
        </ul>
    </div>
</footer>

</body>
</html>