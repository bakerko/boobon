<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Catalogue</title>
    <link rel="stylesheet" href="./styles/style.css">
    <link rel="stylesheet" href="styles/laptop.css">
    <link rel="stylesheet" href="styles/mobile.css">
    <link rel="stylesheet" href="styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="styles/tablet_portrait.css">
    <link rel="stylesheet" href="styles/mobile_320.css">
    <script src="js/sidebar.js"></script>
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
            <div><img class="logo" src="./images/logo.jpg"/></div>
            <div class="search_field">
                <input class="form-control" type="text" aria-label="Search">
                <img class="search_img" src="images/search.png"/>
            </div>
            <div class="cart_box">
                <img class="cart" src="images/Cart.png" height="450" width="450"/>
                <p><b>: 2000 грн</b></p>
            </div>
        </div>
    </div>

    <nav class="navbar">
        <ul class="blackbar container">
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/ballon.svg"> Латексные шары</a>
            </li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/balloon heart.png"/>
                Фольгированные шары</a></li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/Celebrate.png"/> Товары для
                праздника</a></li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon star" src="./images/star.svg"/> Коллекции</a>
            </li>
            <li class="btn ipad_button"><a class="blackbar__item button colorblack" href="#"> Оформить мероприятие</a></li>
        </ul>
        <div id="mySidenav" class="mobile_only sidenav ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Латексные шары</a>
            <a href="#">Фольгированные шары</a>
            <a href="#">Товары для праздника</a>
            <a href="#">Коллекции</a>
            <a href="#">Оформить мероприятие</a>
        </div>
        <p class=" mobile_only side_menu" onclick="openNav()">MENU</p>

    </nav>
</header>

<main class="container">
    <p class="path">Главная / Товары</p>
    <div class="noMargin_flexbox landscape_view">
        <div class="sections">
            <div class="card">
                <a href="">
                    <img class="product_photo" src="./images/products/uno.png"/>
                    <div class="card-description">
                        <a href=""><p class="prod_name">ЛАТЕКСНЫЕ ШАРЫ</p></a>
                    </div>
                </a>
            </div>
        </div>
        <div class="sections">
            <div class="card">
                <a href="">
                    <img class="product_photo" src="./images/products/latex.png"/>
                    <div class="card-description">
                        <a href=""><p class="prod_name">ФОЛЬГИРОВАННЫЕ ШАРЫ</p></a>
                    </div>
                </a>
            </div>
        </div>
        <div class="sections">
            <div class="card">
                <a href="">
                    <img class="product_photo" src="./images/products/celebration.png"/>
                    <div class="card-description">
                        <a href=""><p class="prod_name">ТОВАРЫ ДЛЯ ПРАЗДНИКА</p></a>
                    </div>
                </a>
            </div>
        </div>
        <div class="sections">
            <div class="card">
                <a href="">
                    <img class="product_photo" src="./images/products/bar.png"/>
                    <div class="card-description">
                        <a href=""><p class="prod_name">КОЛЛЕКЦИИ</p></a>
                    </div>
                </a>
            </div>
        </div>
    </div>

    <hr class="horisontal">
    <form class="right" action="select1.php" method="post">
        <label>Сортировать по: </label>
        <select name="sort">
            <option value='1'>Сначала дешёвые</option>
            <option value='2'>Сначала дорогие</option>
            <option value='3'>По рейтингу</option>
        </select>
    </form>

    <div class="wrapper_main">
        <div>
            <a href=""><img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href=""><img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href=""><img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
        <div>
            <a href="">
                <img class="product_photo_item" src="images/products/uno.png"/>
                <div class="card-item card-description">
                    <a href=""><p class="prod_name sm">Название товара ла ла ла ал ад</p></a>
                    <p class="price"><strong>2 000 грн</strong></p>
                    <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                    </button>
                </div>
            </a>
        </div>
    </div>
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
            <li class="footer_link"><a class="blackbar__item" href="">Реквизиты</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Программа лояльности</a></li>
            <li class="footer_link"><a class="blackbar__item" href="">Вакансии</a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">КОНТАКТЫ</li>
            <li class="footer_link"><a class="blackbar__item" href=""><i class="fas fa-phone"></i> +38 (063)
                000-00-00</a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><i class="fas fa-envelope"></i> shop@shop.com</a>
            </li>
            <li class="footer_link insta_link"><a class="blackbar__item button" href=""><img class="colored_icon"
                                                                                             src="./images/instagram-sketched.png"
                                                                                             alt=""><span
                    class="goToInsta">ПЕРЕЙТИ В INSTAGRAM</span> </a></li>
        </ul>
        <ul class="footer_landscape_item">
            <li class="title">ПИШИТЕ НАМ</li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon" src="./images/viber.svg"
                                                                           alt=""><span
                    class="goToInsta">Viber</span></a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon"
                                                                           src="./images/telegram.svg" alt=""><span
                    class="goToInsta">Telegram</span></a></li>
            <li class="footer_link"><a class="blackbar__item" href=""><img class="colored_icon chat"
                                                                           src="./images/chat.png" alt=""><span
                    class="goToInsta">Чат на сайте</span></a></li>
        </ul>
    </div>
</footer>

</body>
</html>