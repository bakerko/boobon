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
    <script src="/js/cart.js"></script>
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
    
    <?php echo '<p class="path">'.$_SESSION['kroshki'].'</p>';?>   
    
    
    <div class="noMargin_flexbox">
        <div style="width:65%;">
            
    <?php    
    
        if(isset($products)&&count($products)>0)
           foreach($products as $product){  
            
            if($product->default_product)continue;
            
            
            if(isset($cart_list[$product->id]))
                $product->quant=$cart_list[$product->id];
            else{
                $product->quant=0;
            }
    
            
            $image = "/content/images/".$product->id."/1.jpg";

            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";
        
            echo '
                <div class="tablet_cart cart_item">
                    <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                        <a href=""><img class="baloon baloon_small" src="'.$image.'"/></a>
                        <p class="center mob_title">'.$product->name.'</p>
                        <div class="amount">
                            <span class="down">-</span>
                            <input id="'.$product->id.'" type="text" value="'.$product->quant.'"/>
                            <span class="up">+</span>
                        </div>

                        <p class="center mob_title">'.$product->price.' грн</p>
                        <div><a href="/home/cart_remove_product/'.$product->id.'/"><img class="close_image close_image_mob" src="/images/close_black.png" alt=""></a></div>
                    </div>
                </div>
            ';  
            
        }
        
        if(isset($default_products)&&count($default_products)>0)
           foreach($default_products as $product){  
            
            if(isset($cart_list[$product->id]))
                $product->quant=$cart_list[$product->id];
            else{
                $product->quant=0;
            }
    
            
            $image = "/content/images/".$product->id."/1.jpg";

            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";

            
            $checked='';
            if(isset($_SESSION['products'][$product->id]))
            if($_SESSION['products'][$product->id]>0)
                $checked="checked";
        
            echo '
                <div class="tablet_cart cart_item">
                    <div class="description noMargin_flexbox tablet_description mob_desrc pos_relative">
                        <a href=""><img class="baloon baloon_small" src="'.$image.'"/></a>
                        <p class="center mob_title">'.$product->name.'</p>
                        <div class="amount">
                            <input class="cart_checkbox" data-price="'.$product->price.'" data-id="'.$product->id.'"  type="checkbox" '.$checked.'/>
                        </div>

                        <p class="center mob_title">'.$product->price.' грн</p>
                        
                    </div>
                </div>
            ';  
            
        }            
    ?>            
            

            
        </div>
        <div class="total tablet_total">
            <span class="font_xl">ВСЕГО</span>
            <div class="price float_right"><b><div id="total_price"><?php if(isset($_SESSION['total_price'])){echo $_SESSION['total_price'];}else{echo 0;}?></div> грн</b></div>
            <button  onclick="document.getElementById('checkout').submit();"  class="button black_button">ОФОРМИТЬ ЗАКАЗ</button>
            <a href="/home"><button class="button white_button">ПРОДОЛЖИТЬ ПОКУПКИ</button></a>
        </div>
    </div>


    <form id="checkout" action="/home/checkout" method="post">
    </form>
</main>    
    

<?php echo view('footer'); ?>  
    
<script src="/js/modal.js"></script>
</body>
</html>