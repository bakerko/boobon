<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Заказы</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
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
    
    if(isset($order_product))
    foreach($order_product as $item){
        $orders_mas[$item->order_id][]=$item->product_id;
    }


?>  

<main class="container">
    

    <table width="70%" align="center">
    <?php
        if(isset($orders))
        foreach($orders as $item){
           
            $tmp_data=date("d.m.Y", $item->c_time);
            
            $accepted='<td><a href="/home/order_accept/'.$item->id.'">Принять</a></td>';
            if($item->accepted){
                $accepted='<td>Принят</td>';
            }
            
            $deleted='<td><a href="/home/order_delete/'.$item->id.'">Удалить</a></td>';
            if($item->deleted){
                $deleted='<td>Удален</td>';
            }            
            
            
            echo '
                <tr>
                    <td>'.$tmp_data.'</td>
                    <td>'.$item->name.'</td>
                    <td>'.$item->phone.'</td>    
                    <td>'.$item->sum.'</td>   
                    <td>'.$accepted.'</td>
                    <td>'.$deleted.'</td>
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
            <table width="70%" align="center">
                <tr>
                    <td><img width="60" src="'.$image.'" /></td>
                    <td>'.$product->name.'</td>
                    <td>'.$product->price.'</td>
                        
                </tr>
            </table>
        ';
        
         }
             echo '</tr>';    
        }    
    ?>
 
    </table>   
    
  
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