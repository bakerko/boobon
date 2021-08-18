<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Категории</title>
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

<?php echo view('admin_header'); ?>  

<main class="container">
    


    <form method="post" action="/home/product_add" enctype="multipart/form-data">
    <table width="70%" align="center">
        <tr>
            <td>Название</td><td><input type="text" name="name" ></td>
            <td>Описание</td><td><input type="text" name="descr" ></td>
            <td>Цена</td><td><input type="text" name="price" ></td>
        </tr>
        <tr>
            <td><input type="file" name="image1" id="fileToUpload"></td>
            <td><input type="file" name="image2" id="fileToUpload"></td>
            <td><input type="file" name="image3" id="fileToUpload"></td>
            <td><input type="file" name="image4" id="fileToUpload"></td>
        </tr>
        <tr>            
            <td colspan=2><input type=submit name="submit" value="Добавить"></td>
        </tr>
    </table>
    </form>
    
    <br><br>
    
    
    <?php

    if(isset($products))
    foreach($products as $product){
            
        $t_rnd=rand();

        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists($doc_root.$image))
            $image="/images/def_image.jpg";

        $image=$image.'?='.$t_rnd;            
            
            
    ?>
    
    <table width="70%" align="center">
        <tr>
            <td><img width="60" src="<?php echo $image;?>" /></td>
            <td><?php echo $product->name;?></td>
            <td><?php echo $product->descr;?></td>
            <td><a href="/home/product_edit/<?php echo $product->id;?>"><img src="/images/edit.jpg" width="40"></a></td>
            <td><a href="/home/product_delete/<?php echo $product->id;?>"><img src="/images/delete.png" width="40"></a></td>
        </tr>
    </table>
    
     <?php
        }
    ?>   
    
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