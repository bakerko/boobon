<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Поиск</title>
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
    <script src="/js/modal.js"></script>
    <script src="/js/filters.js"></script>   
    <link rel="stylesheet" href="/styles/modal.css">
</head>

<body>
    
<?php echo view('header');?>  

<main class="container mobile_grid">
    
    <?php echo '<p class="path">'.$_SESSION['kroshki'].'</p>';?>  
    
    
    <p onclick="openFilter()"><b>Фильтр</b></p>

<?php

    $data['filter_groups']=$filter_groups;
    $data['filters']=$filters;
    
    echo view('filters', $data); 
?>  

    <section>
        
        <form class="right" action="select1.php" method="post">
            <label>Сортировать по: </label>
            <select name="sort">
                <option value='1'>Сначала дешёвые</option>
                <option value='2'>Сначала дорогие</option>
                <option value='3'>По рейтингу</option>
            </select>
        </form>
        
        <div class="wrapper">
            
            
<?php        
    
    $tmp_products_filters=array();
    
    if(isset($products_filters))
    foreach($products_filters as $item){
        $tmp_products_filters[$item->product_id].=$item->filter_id.",";
    }
    
    if(!isset($products)){
        echo 'Ничего не найдено';
    }

    if(isset($products))
    foreach($products as $product){ 
        
        $image = "/content/images/".$product->id."/1.jpg";

        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";
        
        $data_filters='';
        if(isset($tmp_products_filters[$product->id])){
            $data_filters=$tmp_products_filters[$product->id];
        }
        
        $card_link='/home/product_card/'.$product->id;
        if($product->is_mix)
            $card_link='/home/product_card_mix/'.$product->id;
        
        echo '
            <div class="product" data-filters="'.$data_filters.'">
                <a href="'.$card_link.'">
                    <img class="product_photo_item" src="'.$image.'"/>
                    <div class="card-item card-description">
                        <p class="prod_name sm">'.$product->name.'</p>
                        <p class="price"><strong>'.$product->price.' грн</strong></p>
                        <a href="/home/cart_add_product/'.$product->id.'/'.$product->price.'/1">
                            <button class="button card_button"><img class="button_icon" src="/images/Cart-1.png"/> В КОРЗИНУ </button>
                </a>
                </div>
                </a>
            </div>
            ';
    }
?>               
            

 
        </div>
        <?php 
            /*
                echo '
                    <div class="show"><img class="close_image show_more" src="/images/close.png" alt="">
                    <p> Показать больше товаров</p></div>
                ';
             */
        ?>
    </section>


</main>
    
<?php echo view('footer'); ?>  

 
    
</body>
</html>