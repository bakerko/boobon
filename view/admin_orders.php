<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заказы</title>
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

<?php echo view('admin_header'); 

    $products_mas = array();  
    
    foreach($products as $product){
        $products_mas[$product->id]=$product;
    }
    
    $orders_names = array();
    $orders_mas = array();
    
    if(isset($orders))
    foreach($orders as $item){
        $orders_mas[$item->id] = array();
    }
    
    $orders_mas_quant = array(); 
    
    if(isset($order_product))
    foreach($order_product as $item){
        $orders_mas[$item->order_id][]=$item->product_id;
        $orders_mas_quant[$item->order_id][$item->product_id]=$item->quant;
    }


?>  

<div class="main_sort">

    
    <form id="form2" action="/home/admin_order_filter/2" method="post">
    <select onchange="document.getElementById('form2').submit();"  class="categoty" name="filter">
        <option <?php if($_SESSION['admin_order_filter2']==1)echo 'selected';?> value="1">Активные</option>
        <option <?php if($_SESSION['admin_order_filter2']==2)echo 'selected';?> value="2">Удаленные</option>
        <option <?php if($_SESSION['admin_order_filter2']==3)echo 'selected';?> value="3">Все</option>
    </select>
    </form>
    
    <form id="form3" action="/home/admin_order_filter/3" method="post">    
    <select onchange="document.getElementById('form3').submit();"   class="categoty" name="filter">
        <option value="1" <?php if($_SESSION['admin_order_filter3']==1)echo 'selected';?>>Дата по убыванию</option>
        <option value="2" <?php if($_SESSION['admin_order_filter3']==2)echo 'selected';?>>Дата по возрастанию</option>
        <option value="3" <?php if($_SESSION['admin_order_filter3']==3)echo 'selected';?>>Цена по убыванию</option>
        <option value="4" <?php if($_SESSION['admin_order_filter3']==4)echo 'selected';?>>Цена по возрастанию</option>

    </select>
    </form>
</div>  
    
<main class="container">
    <article>
        <div class="tablet_cart cart_item">
            <div class="description height beige noMargin_flexbox ">
                <b class="center">На когда</b>
                <b class="center">Имя клиента</b>
                <b class="center">Контактный телефон</b>
                <b class="center">Сумма</b>
                <b class="center accepted_noMargin">Удаление</b>
            </div>
        </div>
    </article>   
    
    <article>  
    <?php
        if(isset($orders))
        foreach($orders as $item){
           
            $tmp_data=date("d.m.Y h:m", $item->c_time);
            

            
            $deleted='<a href="/home/order_delete/'.$item->id.'"><p class="center accepted_noMargin">Удалить</p></a>';
            if($item->deleted){
                $deleted='<p class="center accepted_noMargin">Удален</p>';
            }            
            
            
            echo '


                <div class="tablet_cart cart_item " onclick="showBox(\'order_'.$item->id.'\');">
                    <div class="description bgOrderLine noMargin_flexbox pointer">
                        <p class="center">'.$item->date.' '.$item->time.'</p>
                        <p class="center">'.$item->name.'</p>
                        <p class="center">'.$item->phone.'</p>
                            <p class="center">'.$item->sum.'</p>
                        '.$deleted.'
                    </div>
                </div>
                
                <div id="order_'.$item->id.'" style="display: none">    
            ';
            
           $delivery='По городу';
           if($item->type==2)
               $delivery='Новая почта';

            
         echo '
            <div class="cart_item">
                <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative" style="padding-left:20px;padding-right:20px;">
                    <p>'.$delivery.'</p>
                    <p>'.$item->adress.'</p>
                    <p>'.$tmp_data.'</p>

                </div>
            </div>
            ';

        if(isset($orders_mas[$item->id]))
        foreach($orders_mas[$item->id] as $product_id){

            $product=$products_mas[$product_id];

            $t_rnd=rand();

            $image = "/content/images/".$product->id."/1.jpg";

            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";

            $image=$image.'?='.$t_rnd;            


            echo '
                
            <div class="cart_item">
                <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                    <a class="" href=""><img class="baloon baloon_small" src="'.$image.'"/></a>
                    <p class="center">'.$product->name.'</p>
                    <div class="amount">
                        <input type="text" value="'.$orders_mas_quant[$item->id][$product_id].'"/>шт.
                    </div>
                    <div class="amount" style="margin-right: 20px;">
                        <input type="text" value="'.$product->price.'"/>грн.
                    </div>

                </div>
            </div>

            ';

             }
                 echo '</div>';    
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