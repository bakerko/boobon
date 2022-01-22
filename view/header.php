<header>
    

    
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-KBM4MHM');

  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
</script>
<!-- End Google Tag Manager -->


    <?
        $self_url = $_SERVER['REQUEST_URI'];
        
        //if(!strripos($self_url, 'show_menu1')){echo 'href="/home/show_menu1"';}
    
    ?>


    <link type="image/x-icon" href="/favicon.ico" rel="shortcut icon">
    <link type="Image/x-icon" href="/favicon.ico" rel="icon">
     
    
    <nav class="top_nav">
        <div class="top_nav_bar container">
            <ul class="menu__box mob_menu">
                <li><a class="menu__item" href="/home/delivery_payment">Доставка и оплата</a></li>
                <li><a class="menu__item" href="/home/faq">Вопросы и ответы</a></li>
                <li><a class="menu__item" href="/home/warranty">Гарантии и возврат</a></li>
                <li><a class="menu__item" href="/home/contacts">Контакты</a></li>
            </ul>
       
            <ul class="menu__box tel">
                
                <a class="blackbar__item" href="viber://chat?number=+380970707219">
                    <span class=""><b>Viber</b></span>
                </a>
                &nbsp;&nbsp;&nbsp;
                
                <a class="blackbar__item" href="https://telegram.im/@boobon_balloon">
                    <span class=""><b>Telegram</b></span>
                </a>                    
                &nbsp;&nbsp;&nbsp;<a href="tel:+38 (097) 07 07 219"><b> 097-07-07-219</b></a>
                
                &nbsp;&nbsp;&nbsp;
                <div style=" text-align: right;">
                    Адрес: Ул. Троицкая 16
                </div>  
            </ul>
            
            
            
        </div>

    </nav>
    <div class="search_block">

        
        
        <div class="container flexbox flex_mob">
            

            
            <div>
                <a href="/home/"><img class="logo" src="/images/logo.jpg"/></a>

            </div>
            

            
            <div class="search_field">
                <form id="search" method="post" action="/home/search">
                    <input class="form-control" type="text" aria-label="Search" name="search_text">
                    <img onclick="document.getElementById('search').submit();" class="search_img" src="/images/search.png"/>
                </form>
            </div>
            
            
            <a href="/home/cart">
                
         
                 
                
                <div class="cart_box">
                    <img class="cart" src="/images/Cart.png" height="450" width="450"/>
                    <p><b>: <b id="total_price_head"><?php if(isset($_SESSION['total_price'])){echo $_SESSION['total_price'];}else{echo 0;}?></b>&nbsp; грн</b></p>
                </div>
            </a>
        </div>
            
    </div>
    
    
    
    
    <div id="myBtn_side" class="mobile_only modal_centerBtn"><a class="button colorblack" href="#"> Оформить
        мероприятие</a>
    </div>

    <nav class="navbar">
        <ul class="blackbar topmenu container">
            <li><a style="cursor:pointer;" class="blackbar__item" <?if(!strripos($self_url, 'show_menu1')){echo 'href="/home/show_menu1"';}?>><img class="nav_icon" src="/images/ballon.svg"> Латексные шары</a>                <ul class="submenu">
                    <li><a href="/home/show_catalog/21">Круглые шары без рисунка</a></li>
                    <li><a href="/home/show_catalog/22">Шары с принтом</a></li>
                    <li><a href="/home/show_catalog/23">Конфетти</a></li>
                    <li><a href="/home/show_catalog/24">Агаты</a></li>
                    <li><a href="/home/show_catalog/25">Браш</a></li>
                </ul>
            </li>
            <li><a style="cursor:pointer;" class="blackbar__item" <?if(!strripos($self_url, 'show_menu2')){echo 'href="/home/show_menu2"';}?>><img class="nav_icon" src="/images/balloon heart.png"/>
                Фольгированные шары</a>
                <ul class="submenu">
                <li><a href="/home/show_catalog/26">Звезды, сердца, круги</a></li>
                <li><a href="/home/show_catalog/27">Цифры</a></li>
                <li><a href="/home/show_catalog/28">Шары гиганты, баблс, сферы</a></li>
                <li><a href="/home/show_catalog/29">Большие фигуры из фольги</a></li>
                <li><a href="/home/show_catalog/30">Ходячие фигуры</a></li>
                <li><a href="/home/show_catalog/31">Аксессуары</a></li>
                <li><a href="/home/show_catalog/32">Коробки с шарами</a></li>
                </ul>
            </li>
            <li><a style="cursor:pointer;" class="blackbar__item" <?if(!strripos($self_url, 'show_menu3')){echo 'href="/home/show_menu3"';}?>><img class="nav_icon" src="/images/Celebrate.png"/> Товары для
                праздника</a>
                <ul class="submenu">
                    <li><a href="/home/show_catalog/33">Гирлянды</a></li>
                    <li><a href="/home/show_catalog/34">Свечи в торт</a></li>
                    <li><a href="/home/show_catalog/35">Колпачки/короны</a></li>
                    <li><a href="/home/show_catalog/36">Скатерти</a></li>
                    <li><a href="/home/show_catalog/37">Хлопушки</a></li>
                    <li><a href="/home/show_catalog/38">Сервировка</a></li>
                </ul>
             </li>
            <li><a style="cursor:pointer;" class="blackbar__item submenu_link" <?if(!strripos($self_url, 'show_menu4')){echo 'href="/home/show_menu4"';}?>><img class="nav_icon star" src="/images/star.svg"/>
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
                    <input class="modal_input" type="text" id="phone" name="phone" placeholder="Ваш телефон">
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
                <li><a href="/home/show_catalog/31">Аксессуары</a></li>
                <li><a href="/home/show_catalog/32">Коробки с шарами</a></li>
            </ul>
            <a href="/home/show_menu3">Товары для праздника</a>
            <ul class="submenu_side">
                <li><a href="/home/show_catalog/33">Гирлянды</a></li>
                <li><a href="/home/show_catalog/34">Свечи в торт</a></li>
                <li><a href="/home/show_catalog/35">Колпачки/короны</a></li>
                <li><a href="/home/show_catalog/36">Скатерти</a></li>
                <li><a href="/home/show_catalog/37">Хлопушки</a></li>
                <li><a href="/home/show_catalog/38">Сервировка</a></li>
            </ul>
            <a href="/home/show_menu4">Готовые решения</a>
            <ul class="submenu_side">
                    <li><a href="/home/show_catalog/39">Воздушные шары</a></li>
                    <li><a href="/home/show_catalog/40">Товары для праздника</a></li>
            </ul>
            <a id="myBtn_side2" href="#">Оформить мероприятие</a>
             <ul class="submenu_side">
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
                    <li>&nbsp;</li>
            </ul>
        </div>
        <p class=" mobile_only side_menu" onclick="openNav()">МЕНЮ</p>

    </nav>
</header>

<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KBM4MHM"
height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->





