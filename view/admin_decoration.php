<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Оформление</title>
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/admin_styles.css">
    <script src="/js/openlink.js"></script>
</head>

<body>
    
<?php echo view('admin_header'); ?>  

    
<div class="main_sort">
    
    <form id="form1" action="/home/admin_decoration_filter/1" method="post">
    <select onchange="document.getElementById('form1').submit();" id="admin_product_filter2"  class="categoty" name="filter">
        <option <?php if($_SESSION['admin_decoration_filter1']==1)echo 'selected';?> value="1">Активные</option>
        <option <?php if($_SESSION['admin_decoration_filter1']==2)echo 'selected';?> value="2">Удаленные</option>
        <option <?php if($_SESSION['admin_decoration_filter1']==3)echo 'selected';?> value="3">Все</option>
    </select>
    </form>

</div>       
    
    
    
<main class="container">
    <article> 
        <div class="tablet_cart cart_item">
            <div class="description height beige noMargin_flexbox ">
                <b class="center"></b>
                <b class="center">Имя</b>
                <b class="center">Телефон</b>
                <b class="center">Описание</b>
                <b class="center accepted_noMargin">Удалить</b>
            </div>
        </div>
        
<?php   
    
    if($orders)
    foreach($orders as $order){

        $c_date= date('"d.m.Y"', $order->time);
        
        
        echo '

        <div class="tablet_cart cart_item">
            <div class="description noMargin_flexbox pos_relative"">
                <a href=""><img class="baloon baloon_small" src="/images/def_image.jpg"/></a>
                <b class="center mob_title"style="font-weight: normal;">'.$order->name.'</b>
                <b class="center mob_title" style="font-weight: normal;">'.$order->phone.'</b>
                <b class="center mob_title" style="font-weight: normal;">'.$order->descr.'</b>
                <b class="status"><a href="/home/admin_decoration_delete/'.$order->id.'">Удалить</a></b>
            </div>
        </div>

        ';

                
    }

?>    
    
    </article>
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