<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Main</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" type="text/css" href="/slick/slick.css"/>
    <link rel="stylesheet" type="text/css" href="/slick/slick-theme.css"/>
    <link rel="stylesheet" type="text/css" href="/styles/slick.css"/>
    <link rel="stylesheet" href="styles/tablet_portrait.css">
    <link rel="stylesheet" href="styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <link rel="stylesheet" href="/styles/modal.css">
    <link rel="stylesheet" href="/styles/chat.css">
</head>
<body>
    
<?php echo view('header'); ?>  

<main class="container">
    <p class="text_description_title"><b>ЛАТЕКСНЫЕ ШАРЫ</b></p>
    <hr>
    <div class="sl">
        
<?php        
        
    if(isset($products))
    foreach($products as $product){ 
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists($doc_root.$image))
            $image="/images/def_image.jpg";
        
        echo '
            <div class="sl__slide">
                    <a href="">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <a href=""><p class="prod_name sm">'.$product->name.'</p></a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                            <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                            </button>
                        </div>
                    </a>
                </div>
            ';
    }
?>     
               
    </div>


    <p class="text_description_title"><b>ФОЛЬГИРОВАННЫЕ ШАРЫ</b></p>
    <hr>
    <div class="sl">
<?php        
        
    if(isset($products))
    foreach($products as $product){ 
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists($doc_root.$image))
            $image="/images/def_image.jpg";
        
        echo '
            <div class="sl__slide">
                    <a href="">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <a href=""><p class="prod_name sm">'.$product->name.'</p></a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                            <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                            </button>
                        </div>
                    </a>
                </div>
            ';
    }
?>   
    </div>


    <p class="text_description_title"><b>ТОВАРЫ ДЛЯ ПРАЗДНИКА</b></p>
    <hr>
    <div class="sl">

<?php        
        
    if(isset($products))
    foreach($products as $product){ 
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists($doc_root.$image))
            $image="/images/def_image.jpg";
        
        echo '
            <div class="sl__slide">
                    <a href="">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <a href=""><p class="prod_name sm">'.$product->name.'</p></a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                            <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                            </button>
                        </div>
                    </a>
                </div>
            ';
    }
?>   
    </div>


    <p class="text_description_title"><b>КОРОБКИ С ШАРАМИ</b></p>
    <hr>
    <div class="sl">
        
<?php        
        
    if(isset($products))
    foreach($products as $product){ 
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists($doc_root.$image))
            $image="/images/def_image.jpg";
        
        echo '
            <div class="sl__slide">
                    <a href="">
                        <img class="product_photo_item" src="'.$image.'"/>
                        <div class="card-item align_center ">
                            <a href=""><p class="prod_name sm">'.$product->name.'</p></a>
                            <p class="price"><strong>'.$product->price.' грн</strong></p>
                            <button class="button card_button"><img class="button_icon" src="./images/Cart-1.png"/> В КОРЗИНУ
                            </button>
                        </div>
                    </a>
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