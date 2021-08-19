<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование товара</title>
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
</head>

<body>

<?php 
    echo view('admin_header'); 

    $filter_mas = array();
    $filter_names = array();
    
    foreach($filter_groups as $group){
        $filter_mas[$group->id] = array();
        
        $filter_names[$group->id]=$group->name;
    }
    
    if($filters)
    foreach($filters as $filter){
        
        $filter_mas[$filter->group_id][]=$filter;
    }      
    
    $tmp_filters=array();
    if(isset($products_filters))
    foreach($products_filters as $item){
        
        $tmp_filters[$item->filter_id]=1;
    }

?>  

<main class="container">
 
    <form method="post" action="/home/product_change" enctype="multipart/form-data">
            <aside class="aside aside_adm sidebar" id="filter_open">

            <?php ////////////////////////////////////////////////////////////////////////////////////


            if(isset($filter_names))
            foreach($filter_names as $group_id=>$group_name){

                if(isset($filter_mas[$group_id]))
                if(count($filter_mas[$group_id])>0){

                }else{
                    continue;
                }

                
                if($group_id==2){
                    echo '<p class="card-description"><b>'.$group_name.'</b></p><hr>
                        <div class="">
                        ';
                }else{
                    echo '<p class="card-description"><b>'.$group_name.'</b></p><hr>';
                }

                foreach($filter_mas[$group_id] as $filter){
                    
                    $checked='';
                    if(isset($tmp_filters[$filter->id]))
                        $checked='checked';  

                    $inner_block=$filter->name;

                    $inner_block='<div class="checkbox_filter"><input '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'">'.$filter->name.'</label></div>'; 

                    if($group_id==2){//color

                       //$inner_block='<div><input '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label></div>';  
                    
                                               $inner_block='
                        <div class="inline-flex">
                           <input style="margin-top:6px;" type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'" '.$checked.'><label for="box_'.$filter->id.'">
                           <div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div>
                        </label></div>
                      ';
                    }       

                    echo $inner_block;

                }

                if($group_id==2){
                    echo '</div>';
                }
            }

            echo '</aside>';
            /////////////////////////////////////////////////////////////////////////////////////////////
            ?>            
        
        
            <select class="categoty" autofocus name="category">
                <?php
                    if(isset($category))
                    foreach($category as $item){
                        $tselected='';
                        if($item->id==$product->category)$tselected="selected";
                            
                        echo '<option '.$tselected.' value="'.$item->id.'" >'.$item->name.'</option>';
                    }
                ?>
            </select>          
        
        <div class="photos">
            <legend><img width="100" src="/content/images/<?php echo $product->id;?>/1.jpg" /></legend>
            <input style="overflow: hidden; width:18%;" class="fileToLoad" type="file" name="image1" id="fileToUpload">
            <legend><img width="100" src="/content/images/<?php echo $product->id;?>/2.jpg" /></legend>
            <input style="overflow: hidden; width:18%;" class="fileToLoad" type="file" name="image2" id="fileToUpload">
            <legend><img width="100" src="/content/images/<?php echo $product->id;?>/3.jpg" /></legend>
            <input style="overflow: hidden; width:18%;" class="fileToLoad" type="file" name="image3" id="fileToUpload">
            <legend><img width="100" src="/content/images/<?php echo $product->id;?>/4.jpg" /></legend>
            <input style="overflow: hidden; width:18%;" class="fileToLoad" type="file" name="image4" id="fileToUpload">
        </div>
                
            <p class="choice">Код товара </p> <?php echo $product->id;?>
                                            <input type="hidden" name="id" value="<?php echo $product->id;?>">
                               
            <p class="choice">Артикул</p><input type="text" name="artikul" value='<?php echo $product->artikul?>' style="width:200px;">
            
            <p class="choice">Название</p><input type="text" name="name" value='<?php echo $product->name?>' style="width:200px;">
            <p class="choice">Описание</p><textarea  rows="10" cols="25" name="descr" ><?php echo $product->descr;?></textarea>
            <p class="choice">Цена</p><input type="text" name="price" value="<?php echo $product->price;?>">
            
            <p class="choice">Размер</p><input type="text" name="size"  value="<?php echo $product->size;?>">
            <p class="choice">Материал</p><input type="text" name="material"  value="<?php echo $product->material;?>">
            <p class="choice">Страна</p><input type="text" name="country"  value="<?php echo $product->country;?>">  
            
            <input type="hidden" name="is_mix"  value="0">  
            
            <button class="button black_button" type="submit" name="submit" value="Добавить">Изменить</button>            
    </form>   
    
    
    
    <div class="article">
        <hr>
        <br>
        <form method="post" action="/home/product_add_to_mix/<?php echo $product->id;?>">
            <div class="noMargin_flexbox">
                <input class="button black_button no_margin" type="submit" name="submit" value="Добавить товар в сборный">
                    
                </input>
                <div >
                    <p class="input_for_edit">Количество:</p>
                    <input class="q-ty_edit" type="text" name="quant" value="1"/>
                </div >
                <select class="categoty width20" name="mix_id">
                    <?php
                        if(isset($product_mix))
                        foreach($product_mix as $item){
                            echo '<option value="'.$item->id.'">'.$item->name.'</option>';
                        }
                    ?>
                </select>
            </div>
        </form>
    </div>    
    

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