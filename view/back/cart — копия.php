<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Cart</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/index.js"></script>
    <script src="/js/modal.js"></script>
    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
    
<?php echo view('header'); ?>  

    
<?php 
/*
    if(isset($cart_list)){
        var_dump($cart_list);
    }

    if(isset($products)){
        var_dump($products);
    }
 */
?>   
    
    
<main class="container">
    <p class="path">Главная / Корзина</p>
    <div class="noMargin_flexbox">
        <div>
            
    <?php    
        if(isset($products))
           foreach($products as $product){  
            
            if(isset($cart_list[$product->id]))
                $product->quant=$cart_list[$product->id];
            else{
                $product->quant=0;
            }
    
            
            $image = "/content/images/".$product->id."/1.jpg";

            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";
        
            echo '
                <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                    <a href=""><img class="baloon baloon_small" src="'.$image.'"/></a>
                    <p class="center mob_title">'.$product->name.'</p>
                    <div class="amount">
                        <span class="down">-</span>
                        <input type="text" value="'.$product->quant.'"/>
                        <span class="up">+</span>
                    </div>

                    <p class="center mob_title"> '.$product->price.' грн</p>
                    <div><img class="close_image close_image_mob" src="/images/close_black.png" alt=""></div>
                </div>
            ';  
            
        }
    ?>            
            
            <div class="tablet_cart cart_item">
                <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                    <a href=""><img class="baloon baloon_small" src="images/1baloon.png"/></a>
                    <p class="center mob_title">КОНФЕТТИ ГЛИТТЕР СЕРЕБРО</p>
                    <div class="amount">
                        <span class="down">-</span>
                        <input type="text" value="1"/>
                        <span class="up">+</span>
                    </div>

                    <p class="center mob_title"> 1,32 грн</p>
                    <div><img class="close_image close_image_mob" src="./images/close_black.png" alt=""></div>
                </div>
            </div>
            
        </div>
        <div class="total tablet_total">
            <span class="font_xl">ВСЕГО</span>
            <div class="price float_right"><b>1,32 грн</b></div>
            <button id="checkout" class="button black_button">ОФОРМИТЬ ЗАКАЗ</button>
            <button class="button white_button">ПРОДОЛЖИТЬ ПОКУПКИ</button>
        </div>
    </div>


    <form action="">
        <input class="check_item" type="checkbox" name="check1" value="checked1" checked>Даю согласие на хранение и
        обработку моих персональных данных
        (или длугой текст)<br>
        <input class="check_item" type="checkbox" name="check2" value="checked2">Даю согласие на получение рекламной
        рассылки (или другой
        текст)
    </form>
</main>    
    
<main class="container">
    <p class="path">Главная / Корзина</p>

    <div class="noMargin_flexbox tablet_cart">
        
    <?php    
        if(isset($products))
           foreach($products as $product){  
            
            if(isset($cart_list[$product->id]))
                $product->quant=$cart_list[$product->id];
            else{
                $product->quant=0;
            }
    
            
            $image = "/content/images/".$product->id."/1.jpg";

            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";
        
            echo '
                <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                    <a href=""><img class="baloon baloon_small" src="'.$image.'"/></a>
                    <p class="center mob_title">'.$product->name.'</p>
                    <div class="amount">
                        <span class="down">-</span>
                        <input type="text" value="'.$product->quant.'"/>
                        <span class="up">+</span>
                    </div>

                    <p class="center mob_title"> '.$product->price.' грн</p>
                    <div><img class="close_image close_image_mob" src="/images/close_black.png" alt=""></div>
                </div>
            ';  
            
        }
    ?>
        
        
        <div class="total tablet_total">
            <span class="font_xl">ВСЕГО</span>
            <div class="price float_right"><b>1,32 грн</b></div>
            <a href="/home/checkout"><button id="checkout" class="button black_button">ОФОРМИТЬ ЗАКАЗ</button></a>
            <a href="/home/"><button class="button white_button">ПРОДОЛЖИТЬ ПОКУПКИ</button></a>
        </div>
    </div>
    <form action="">
        <input class="check_item" type="checkbox" name="check1" value="checked1" checked>Добавить грузик<br>
        <input class="check_item" type="checkbox" name="check2" value="checked2">Добавить упаковку
    </form>
</main>
    
<?php echo view('footer'); ?>  
    
<script src="/js/modal.js"></script>
</body>
</html>