<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Товары</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/styles/slick.css"/>
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/cart.js"></script>

    <link rel="stylesheet" href="/styles/modal.css">
    <link rel="stylesheet" href="/styles/chat.css">
</head>
<body>
    
    <style>

        main .slick-prev:hover, main .slick-next:hover{
            background-color:transparent;
            color:transparent;
        }
        
        .slick-prev, .slick-next {
            font-size: 0;
            line-height: 0;
            position: absolute;
            top: 30%;
            display: block;
            width: 40px;
            height: 60px;
            padding: 0;
            -webkit-transform: translate(0, -50%);
            -ms-transform: translate(0, -50%);
            transform: translate(0, -50%);
            cursor: pointer;
            color: transparent;
            border: none;
            outline: none;
            background: transparent;
        }        

    </style>
    
<?php echo view('header'); ?>  

<main class="container">
    <p class="text_description_title"><b>ЛАТЕКСНЫЕ ШАРЫ</b></p>
    <hr>
    <div class="sl">
        
<?php        
        
    $counter=0;
    if(isset($products1))
    foreach($products1 as $product){ 
        $counter++;
        if($counter>30)break;
        
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";
        
        $card_link='/home/product_card/'.$product->id;
        if($product->is_mix)
            $card_link='/home/product_card_mix/'.$product->id;
        
        $tmp_name = str_replace('"', '', $product->name);
        
        echo '
            <div class="sl__slide">
                    <a href="'.$card_link.'">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <p class="prod_name sm">'.$product->name.'</p>
                    </a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                                <button onclick="add_product_js(\''.$product->id.'\', \''.$product->price.'\', 1); show_popup(\''.$tmp_name.'\');" class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ </button>
                        </div>
                    
                </div>
            ';
    }
?>     
               
    </div>


    <p class="text_description_title"><b>ФОЛЬГИРОВАННЫЕ ШАРЫ</b></p>
    <hr>
    <div class="sl">
<?php        
$counter=0;        
    if(isset($products2))
    foreach($products2 as $product){ 
        $counter++;
        if($counter>30)break;
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";
        
        $card_link='/home/product_card/'.$product->id;
        if($product->is_mix)
            $card_link='/home/product_card_mix/'.$product->id;
        
        $tmp_name = str_replace('"', '', $product->name);
        
        echo '
            <div class="sl__slide">
                    <a href="'.$card_link.'">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <p class="prod_name sm">'.$product->name.'</p>
                    </a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                                <button onclick="add_product_js(\''.$product->id.'\', \''.$product->price.'\', 1); show_popup(\''.$tmp_name.'\');" class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ </button>
                        </div>
                    
                </div>
            ';
    }
?>   
    </div>


    <p class="text_description_title"><b>ТОВАРЫ ДЛЯ ПРАЗДНИКА</b></p>
    <hr>
    <div class="sl">

<?php        
$counter=0;        
    if(isset($products3))
    foreach($products3 as $product){ 
        $counter++;
        if($counter>30)break;
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";
        
        $card_link='/home/product_card/'.$product->id;
        if($product->is_mix)
            $card_link='/home/product_card_mix/'.$product->id;        
        
        $tmp_name = str_replace('"', '', $product->name);
        
        echo '
            <div class="sl__slide">
                    <a href="'.$card_link.'">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <p class="prod_name sm">'.$product->name.'</p>
                    </a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                                <button onclick="add_product_js(\''.$product->id.'\', \''.$product->price.'\', 1); show_popup(\''.$tmp_name.'\');" class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ </button>
                        </div>
                    
                </div>
            ';
    }
?>   
    </div>


    <p class="text_description_title"><b>ГОТОВЫЕ РЕШЕНИЯ</b></p>
    <hr>
    <div class="sl">
        
<?php        
        
    
$counter=0;
    if(isset($products4))
    foreach($products4 as $product){ 
        $counter++;
        if($counter>30)break;
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";
        
        $card_link='/home/product_card/'.$product->id;
        if($product->is_mix)
            $card_link='/home/product_card_mix/'.$product->id;        
        
        $tmp_name = str_replace('"', '', $product->name);
        
        echo '
            <div class="sl__slide">
                    <a href="'.$card_link.'">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <p class="prod_name sm">'.$product->name.'</p>
                    </a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                                <button onclick="add_product_js(\''.$product->id.'\', \''.$product->price.'\', 1); show_popup(\''.$tmp_name.'\');" class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ </button>
                        </div>
                    
                </div>
            ';
    }
?>   

    </div>

</main>
    
<?php echo view('footer'); ?>  

<script src="/js/modal.js"></script>
<script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
<script type="text/javascript" src="/slick/slick.min.js"></script>
<script src="/js/slick.js"></script>
<script src="/slick/slick.js"></script>
<script src="/slick/slick.min.js"></script>
<script src="/js/chat.js"></script>
</body>
</html>