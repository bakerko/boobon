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
            <div><a href=""><img class="logo" src="./images/logo.jpg"/></a></div>
            <div class="search_field">
                <input class="form-control" type="text" aria-label="Search">
                <img class="search_img" src="images/search.png"/>
            </div>
            <a href="#">
                <div class="cart_box">
                    <img class="cart" src="images/Cart.png" height="450" width="450"/>
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
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/ballon.svg"> Латексные шары</a>
                <ul class="submenu">
                <li><a href="">Круглые шары без рисунка</a></li>
                <li><a href="">Шары с принтом</a></li>
                <li><a href="">Конфетти</a></li>
                <li><a href="">Агаты</a></li>
                <li><a href="">Браш</a></li>
                </ul>
            </li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/balloon heart.png"/>
                Фольгированные шары</a>
                <ul class="submenu">
                <li><a href="">Звезды, сердца круги</a></li>
                <li><a href="">Цифры</a></li>
                <li><a href="">Шары гигнты, баблс, сферы</a></li>
                <li><a href="">Большие фигуры из фольги</a></li>
                <li><a href="">Ходячие фигуры</a></li>
                <li><a href="">Надписи и фигуры</a></li>
                <li><a href="">Коробки с шарами</a></li>
                </ul>
            </li>
            <li><a class="blackbar__item" href="#"><img class="nav_icon" src="./images/Celebrate.png"/> Товары для
                праздника</a>
                <ul class="submenu">
                <li><a href="">Гирлянды</a></li>
                <li><a href="">Свечи в торт</a></li>
                <li><a href="">Колпачки/короны</a></li>
                <li><a href="">Открытки</a></li>
                <li><a href="">Подарочные пакеты</a></li>
                <li><a href="">Сервировка</a></li>
                </ul>
             </li>
            <li><a class="blackbar__item submenu_link" href="#"><img class="nav_icon star" src="./images/star.svg"/>
                Готовые решения</a>
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
                <form action="/index.php/main/add_decoration_order" method="post">
                    <input class="modal_input" type="text" id="name" name="name" placeholder="Ваше имя">
                    <input class="modal_input" type="text" id="phone" name="tel" placeholder="Ваш телефон">
                    <input class="modal_input modal_text" type="text" id="text" name="descr"
                           placeholder="Опишите ваше мероприятие">
                    <button class="black_button modal_btn" type="submit">Заказать оформление</button>
                </form>
            </div>

        </div>
        <div id="mySidenav" class="mobile_only sidenav ">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <a href="#">Латексные шары</a>
            <ul class="submenu_side">
                <li><a href="">Круглые шары без рисунка</a></li>
                <li><a href="">Шары с принтом</a></li>
                <li><a href="">Конфетти</a></li>
                <li><a href="">Агаты</a></li>
                <li><a href="">Браш</a></li>
            </ul>

            <a href="#">Фольгированные шары</a>
            <ul class="submenu_side">
                <li><a href="">Звезды, сердца круги</a></li>
                <li><a href="">Цифры</a></li>
                <li><a href="">Шары гигнты, баблс, сферы</a></li>
                <li><a href="">Большие фигуры из фольги</a></li>
                <li><a href="">Ходячие фигуры</a></li>
                <li><a href="">Надписи и фигуры</a></li>
                <li><a href="">Коробки с шарами</a></li>
            </ul>

            <a href="#">Товары для праздника</a>
            <ul class="submenu_side">
                <li><a href="">Гирлянды</a></li>
                <li><a href="">Свечи в торт</a></li>
                <li><a href="">Колпачки/короны</a></li>
                <li><a href="">Открытки</a></li>
                <li><a href="">Подарочные пакеты</a></li>
                <li><a href="">Сервировка</a></li>
            </ul>

            <a href="#">Готовые решения</a>
            <ul class="submenu_side">
                <li><a href="">Воздушные шары</a></li>
                <li><a href="">Товары для праздника</a></li>
            </ul>
            <a href="#">Оформить мероприятие</a>
        </div>
        <p class=" mobile_only side_menu" onclick="openNav()">MENU</p>

    </nav>
</header>

