<header>
    <nav class="top_nav">
        <div class="top_nav_bar container">
            <ul class="menu__box mob_menu">
                <li><a class="menu__item" href="/home">Товары</a></li>
                <li><a class="menu__item" href="/home/delivery_payment">Доставка и оплата</a></li>
                <li><a class="menu__item" href="/home/faq">Вопросы и ответы</a></li>
                <li><a class="menu__item" href="/home/warranty">Гарантии и возврат</a></li>
                <li><a class="menu__item" href="/home/contacts">Контакты</a></li>
            </ul>
            <ul class="menu__box tel"><a href="tel:+38 (096) 207 84 83"><b> +38 (096) 207 84 83</b></a></ul>
        </div>

    </nav>
    <div class="search_block">
        <div class="container flexbox flex_mob">
            <div><a href="/home"><img class="logo" src="/images/logo.jpg"/></a></div>
            <div class="search_field">
                <input class="form-control" type="text" aria-label="Search">
                <img class="search_img" src="/images/search.png"/>
            </div>
            <a href="/home/cart">
                <div class="cart_box">
                    <img class="cart" src="/images/Cart.png" height="450" width="450"/>
                    <p><b>: <div id="total_price_head"><?php if(isset($_SESSION['total_price'])){echo $_SESSION['total_price'];}else{echo 0;}?></div> грн</b></p>
                </div>
            </a>
        </div>
    </div>
    <div id="myBtn_side" class="mobile_only modal_centerBtn"><a class="button colorblack" href="#"> Оформить
        мероприятие</a>
    </div>

    <nav class="navbar">
        <ul class="blackbar topmenu container">
            <li><a class="blackbar__item" href="/home/show_menu1"><img class="nav_icon" src="/images/ballon.svg"> Латексные шары</a>
                <ul class="submenu">
                    <li><a href="/home/show_catalog/21">Круглые шары без рисунка</a></li>
                    <li><a href="/home/show_catalog/22">Шары с принтом</a></li>
                    <li><a href="/home/show_catalog/23">Конфетти</a></li>
                    <li><a href="/home/show_catalog/24">Агаты</a></li>
                    <li><a href="/home/show_catalog/25">Браш</a></li>
                </ul>
            </li>
            <li><a class="blackbar__item" href="/home/show_menu2"><img class="nav_icon" src="/images/balloon heart.png"/>
                Фольгированные шары</a>
                <ul class="submenu">
                <li><a href="/home/show_catalog/26">Звезды, сердца, круги</a></li>
                <li><a href="/home/show_catalog/27">Цифры</a></li>
                <li><a href="/home/show_catalog/28">Шары гиганты, баблс, сферы</a></li>
                <li><a href="/home/show_catalog/29">Большие фигуры из фольги</a></li>
                <li><a href="/home/show_catalog/30">Ходячие фигуры</a></li>
                <li><a href="/home/show_catalog/31">Надписи и фигуры</a></li>
                <li><a href="/home/show_catalog/32">Коробки с шарами</a></li>
                </ul>
            </li>
            <li><a class="blackbar__item" href="/home/show_menu3"><img class="nav_icon" src="/images/Celebrate.png"/> Товары для
                праздника</a>
                <ul class="submenu">
                    <li><a href="/home/show_catalog/33">Гирлянды</a></li>
                    <li><a href="/home/show_catalog/34">Свечи в торт</a></li>
                    <li><a href="/home/show_catalog/35">Колпачки/короны</a></li>
                    <li><a href="/home/show_catalog/36">Открытки</a></li>
                    <li><a href="/home/show_catalog/37">Подарочные пакеты</a></li>
                    <li><a href="/home/show_catalog/38">Сервировка</a></li>
                </ul>
             </li>
            <li><a class="blackbar__item submenu_link" href="/home/show_menu4"><img class="nav_icon star" src="/images/star.svg"/>
                Готовые решения</a>
                <ul class="submenu">
                    <li><a href="/home/show_catalog/39">Воздушные шары</a></li>
                    <li><a href="/home/show_catalog/40">Товары для праздника</a></li>
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
                <form action="/home/add_decoration_order" method="post">
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
            <a href="/home/show_menu1">Латексные шары</a>
            <ul class="submenu_side">
                <li><a href="/home/show_catalog/21">Круглые шары без рисунка</a></li>
                <li><a href="/home/show_catalog/22">Шары с принтом</a></li>
                <li><a href="/home/show_catalog/23">Конфетти</a></li>
                <li><a href="/home/show_catalog/24">Агаты</a></li>
                <li><a href="/home/show_catalog/25">Браш</a></li>
            </ul>
            <a href="/home/show_menu2">Фольгированные шары</a>
            <ul class="submenu_side">
                <li><a href="/home/show_catalog/26">Звезды, сердца, круги</a></li>
                <li><a href="/home/show_catalog/27">Цифры</a></li>
                <li><a href="/home/show_catalog/28">Шары гиганты, баблс, сферы</a></li>
                <li><a href="/home/show_catalog/29">Большие фигуры из фольги</a></li>
                <li><a href="/home/show_catalog/30">Ходячие фигуры</a></li>
                <li><a href="/home/show_catalog/31">Надписи и фигуры</a></li>
                <li><a href="/home/show_catalog/32">Коробки с шарами</a></li>
            </ul>
            <a href="/home/show_menu3">Товары для праздника</a>
            <ul class="submenu_side">
                <li><a href="/home/show_catalog/33">Гирлянды</a></li>
                <li><a href="/home/show_catalog/34">Свечи в торт</a></li>
                <li><a href="/home/show_catalog/35">Колпачки/короны</a></li>
                <li><a href="/home/show_catalog/36">Открытки</a></li>
                <li><a href="/home/show_catalog/37">Подарочные пакеты</a></li>
                <li><a href="/home/show_catalog/38">Сервировка</a></li>
            </ul>
            <a href="/home/show_menu4">Готовые решения</a>
            <ul class="submenu_side">
                    <li><a href="/home/show_catalog/39">Воздушные шары</a></li>
                    <li><a href="/home/show_catalog/40">Товары для праздника</a></li>
            </ul>
            <a href="#">Оформить мероприятие</a>
        </div>
        <p class=" mobile_only side_menu" onclick="openNav()">MENU</p>

    </nav>
</header>





