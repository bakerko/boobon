<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Product Card</title>
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <script src="/js/sidebar.js"></script>
    <script src="/js/modal.js"></script>
    <script src="/js/cart.js"></script>
    

    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
<?php 
    echo view('header'); 

    $product_quant=array();
    
    if($mix_products)
    foreach($mix_products as $item){
        $product_quant[$item->product_id]=$item->quant;
    }

    
    
    $product=0;
    

    
    if(isset($mix))
        foreach($mix as $item){ 
            $product=$item;
        }
        
    $image1 = "/content/images/".$product->id."/1.jpg";
    $image2 = "/content/images/".$product->id."/2.jpg";
    $image3 = "/content/images/".$product->id."/3.jpg";
    $image4 = "/content/images/".$product->id."/4.jpg";

    
    if(!file_exists(DOC_ROOT.$image1)){
        $image1="/images/def_image.jpg"; 
    }
    $show_image1='<div class="item1"><img class="mob_baloon" src="'.$image1.'" height="445" width="445"/></div>';
    
    $show_image2="";  
    if(file_exists(DOC_ROOT.$image2)){
        $show_image2='<div><img class="mob_small_baloon" src="'.$image2.'" height="139" width="139"/></div>'; 
    }
    
    $show_image3="";  
    if(file_exists(DOC_ROOT.$image3)){
        $show_image3='<div><img class="mob_small_baloon" src="'.$image3.'" height="139" width="139"/></div>'; 
    }
    
    $show_image4="";  
    if(file_exists(DOC_ROOT.$image4)){
        $show_image4='<div><img class="mob_small_baloon" src="'.$image4.'" height="139" width="139"/></div>'; 
    }    
       
    if(!stripos($_SESSION['kroshki'], $product->name)){
        $link5=' / <a href="/home/product_card_mix/'.$product->id.'">'.$product->name.'</a>';
        $_SESSION['kroshki'].=$link5;
    }
?>  

<main class="container">
    <?php echo '<p class="path">'.$_SESSION['kroshki'].'</p>';?>    

    <aside class="flex_wrap">
        <?php
            echo $show_image1;
            echo $show_image2;
            echo $show_image3;
            echo $show_image4;
        ?>
    </aside>

    
    
    <article  class="product_description">
        <div class="product_description_top">
            <p class="text_description_title"><b><?php echo $product->name;?></b></p>
            <p>Артикул : <?php echo $product->id;?></p>
            <hr>
            <div class="noMargin_flexbox center btn">
                <div class="amount">
  
                </div>
                <p class="no_margin text_description_title"><b><?php echo $product->price;?> грн.</b></p>
                
                <?php 
                    $tmp_name = str_replace('"', '', $product->name);
                ?>
                
                    <button onclick="add_product_js('<?php echo $product->id;?>', '<?php echo $product->price;?>', 1); show_popup('<?php  echo $tmp_name;?>');" class="button cart_button" style="width:150px;"><img class="button_icon invert_color" src="/images/Cart-1.png"/>
                        Купить
                    </button>
                
                    <button onclick="add_product_from_mix_js('<?php echo $product->id;?>'); show_popup('<?php echo $product->name;?>');" class="button cart_button" style="width:250px;">
                        <img class="button_icon invert_color" src="/images/Cart-1.png"/><div style="margin-left:-11px;">Товар раздельно</div></button>
            </div>
            <hr>
            <div>

            </div>
        </div>
        <div class="product_description_bottom path"  style="margin-top:40px;">
            <table style="width:100%">
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/ballon.png" alt=""> <span class="bottom_descr_style">Технология долгого полета</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/delivery.png" alt=""> <span class="bottom_descr_style">Доставим по Днепру через 3 часа</span></td>
                </tr>
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/quality.png" alt=""> <span class="bottom_descr_style">Высокое качество</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/sale.png" alt=""> <span class="bottom_descr_style">Возможен самовывоз</span></td>
                </tr>
                <tr>
                    <td class="description_cell"><img class="product_img" src="/images/shield.png" alt=""> <span class="bottom_descr_style">Наши гарантии</span></td>
                    <td class="description_cell"><img class="product_img" src="/images/pay.png" alt=""> <span class="bottom_descr_style">Удобная оплата</span></td>
                </tr>
            </table>
        </div>

    </article >
    <div class="text_description adaptive_float">
        <p class="text_description_title"><b>Описание</b></p>
        <p>
            <?php echo $product->descr;?>
        </p>
    </div>
    
    <?php

    if($products)
    foreach($products as $product){

        $t_rnd=rand();

        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";

        $image=$image.'?='.$t_rnd;            
            
            
    ?>
    
    <table width="70%" align="center">
        <tr>
            <td><img width="60" src="<?php echo $image;?>" /></td>
            <td><?php echo $product->name;?></td>
            <td><?php echo $product->descr;?></td>
            <td><?php echo $product->price;?> грн.</td>
            <td><?php echo $product_quant[$product->id];?> штук</td>
            
            
        </tr>
    </table>
    
     <?php
        }
    ?>     
    
    
    
    

</main>
<?php echo view('footer'); ?>  
    <script src="/js/modal.js"></script>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
<script src="/js/product_card.js"></script>
</body>
</html>