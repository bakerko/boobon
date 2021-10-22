<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Сборные товары</title>
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
    <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
    <script src="/js/openlink.js"></script>
</head>

<body>

<?php echo view('admin_header'); 

    $filter_mas = array();
    $filter_names = array();
    
    foreach($filter_groups as $group){
        $filter_mas[$group->id] = array();
        
        $filter_names[$group->id]=$group->name;
    }
    
    foreach($filters as $filter){
        $filter_mas[$filter->group_id][]=$filter;
    }    


    $products_mas = array(); 
    $product_mix_mas_quant = array(); 
    
    foreach($products as $product){
        $products_mas[$product->id]=$product;
    }
    
    $product_mix_names = array();
    $product_mix_mas = array();
    
    if(isset($product_mix))
    foreach($product_mix as $mix){
        $product_mix_mas[$mix->id] = array();
    }
    
    if(isset($product_mix_products))
    foreach($product_mix_products as $mix){
        
        $product_mix_mas[$mix->mix_id][]=$mix->product_id;
        $product_mix_mas_quant[$mix->mix_id][$mix->product_id]=$mix->quant;
    }
     

?>  

<div class="main_sort">

    <form id="form1" action="/home/admin_product_mix_filter/1" method="post">
    <select onchange="document.getElementById('form1').submit();" class="categoty" autofocus name="filter">
            <option value="0">Все категории</option>
        <?php
            if(isset($category))
            foreach($category as $item){
                
                $selected='';
                if($_SESSION['admin_product_mix_filter1']==$item->id)$selected='selected';
                        
                echo '<option '.$selected.' value="'.$item->id.'">'.$item->name.'</option>';
            }
        ?>
    </select>   
    </form>
    
    <form id="form2" action="/home/admin_product_mix_filter/2" method="post">
    <select onchange="document.getElementById('form2').submit();" id="admin_product_filter2"  class="categoty" name="filter">
        <option <?php if($_SESSION['admin_product_mix_filter2']==1)echo 'selected';?> value="1">Активные</option>
        <option <?php if($_SESSION['admin_product_mix_filter2']==2)echo 'selected';?> value="2">Удаленные</option>
        <option <?php if($_SESSION['admin_product_mix_filter2']==3)echo 'selected';?> value="3">Все</option>
    </select>
    </form>
    
    <form id="form3" action="/home/admin_product_mix_filter/3" method="post">    
    <select onchange="document.getElementById('form3').submit();" id="admin_product_filter3"  class="categoty" name="filter">
        <option value="1" <?php if($_SESSION['admin_product_mix_filter3']==1)echo 'selected';?>>Дата по убыванию</option>
        <option value="2" <?php if($_SESSION['admin_product_mix_filter3']==2)echo 'selected';?>>Дата по возрастанию</option>
        <option value="3" <?php if($_SESSION['admin_product_mix_filter3']==3)echo 'selected';?>>Цена по убыванию</option>
        <option value="4" <?php if($_SESSION['admin_product_mix_filter3']==4)echo 'selected';?>>Цена по возрастанию</option>
        <option value="5" <?php if($_SESSION['admin_product_mix_filter3']==5)echo 'selected';?>>Название по убыванию</option>
        <option value="6" <?php if($_SESSION['admin_product_mix_filter3']==6)echo 'selected';?>>Название по возрастанию</option>
    </select>
    </form>
</div>      
    
    
    
<main class="container">
    <div class="adding_prod">
    <p><a href="" onclick="showBox ('showBox');  return false">Добавить товар</a></p>
    
    <div id="showBox" style="display: none">
        <form method="post" action="/home/product_add" enctype="multipart/form-data">
            
            <aside class="aside aside_adm sidebar" id="filter_open">

            <?php ////////////////////////////////////////////////////////////////////////////////////


            if(isset($filter_names))
            foreach($filter_names as $group_id=>$group_name){

                if(isset($filter_mas[$group_id]))
                if(count($filter_mas[$group_id])>0){

                }else{
                    continue;
                }

                echo '<p class="card-description"><b>'.$group_name.'</b></p><hr>';
                if($group_id==2){
                    echo '<p class="card-description"><b>'.$group_name.'</b></p><hr>
                        <div class="">
                        ';
                }



                foreach($filter_mas[$group_id] as $filter){

                    $inner_block=$filter->name;

                    $inner_block='<div class="checkbox_filter"><input type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'">'.$filter->name.'</label></div>'; 

                    if($group_id==2){//color

                       //$inner_block='<input type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label>';  
                    
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
                        echo '<option value="'.$item->id.'">'.$item->name.'</option>';
                    }
                ?>
            </select>            
            
            <div class="photos">
                <legend>Картинка</legend>
                <input class="fileToLoad" type="file" name="image1" id="fileToUpload">

            </div>          
                
            <p class="choice">Артикул </p><input class="input" type="text" name="artikul">
            <p class="choice">Название </p><input class="input" type="text" name="name">
            <p class="choice">Описание</p><input class="input" type="text" name="descr">
            <input type="hidden" name="price" value="0">
            <input type="hidden" name="size" value="0" >
            <input type="hidden" name="material"  value="0">
            <input type="hidden" name="country"  value="0">            
            <input type="hidden" name="is_mix" value="1">
            <button class="button black_button" type="submit" name="submit" value="Добавить">Добавить</button>
        
        </form>
    </div>   
    </div>
    
    <hr>
    <br>
    
    
    <div>
        <div>          
            
    <?php ////////////////////////////////////////////////////////////////////////////////////


    if(isset($product_mix))
    foreach($product_mix as $mix){


         $image = "/content/images/".$mix->id."/1.jpg";


        if(!file_exists(DOC_ROOT.$image))
            $image="/images/def_image.jpg";

        $image=$image.'?='.$t_rnd;      
        
        $mix->descr=substr($mix->descr, 0, 60); $mix->descr.='...';
        
        echo '
            
            <div onclick="showBox (\'mix_'.$mix->id.'\');" class="cart_item pointer">
                <div class="description height beige noMargin_flexbox tablet_description mob_desrc pos_relative">
                    <b class="center  "><img width="45" src="'.$image.'" /></b>
                    <b class="center  ">'.$mix->name.'</b>
                    <b class="center ">'.$mix->descr.'</b>
                        <b class="center ">'.$mix->price.' грн.</b>
                    <div class="noMargin_flexbox">
                        <a href="/home/product_edit_mix/'.$mix->id.'"><i class="fas fa-pencil-alt title_icon"></i></a>
                        <a href="/home/product_mix_delete/'.$mix->id.'/"><i class="far fa-times-circle title_icon"></i></a>
                        
                    </div>
                </div>
            </div>
            
            <div id="mix_'.$mix->id.'" style="display: none;">
        ';
        
        


        if(isset($product_mix_mas[$mix->id]))
        foreach($product_mix_mas[$mix->id] as $product_id){
            $product=$products_mas[$product_id];



            $t_rnd=rand();

            $image = "/content/images/".$product->id."/1.jpg";


            if(!file_exists(DOC_ROOT.$image))
                $image="/images/def_image.jpg";

            $image=$image.'?='.$t_rnd;            
            
            
    ?>

            
                <div class="tablet_cart cart_item">
                    <div class="description noMargin_flexbox pos_relative">
                        <a class="" href=""><img class="baloon " src="<?php echo $image;?>"/></a>
                        <p class="center"><?php echo $product->name;?></p>
                        
                            <form method="post" action="/home/product_mix_product_quant" enctype="multipart/form-data">
                                <input type="text" size="2" name="quant" value="<?php echo $product_mix_mas_quant[$mix->id][$product_id]; ?>">
                                <input type="hidden" value="<?php echo $mix->id;?>" name="mix_id">
                                <input type="hidden" value="<?php echo $product_id;?>" name="product_id">
                                <button class="button" type="submit" name="submit" value="Изменить">Изменить</button>
                            </form>
                       <a class="to_delete" href="/home/product_mix_product_delete/<?php echo $mix->id;?>/<?php echo $product->id;?>">Удалить</a>
                    </div>
                </div>
            

     <?php
            

        }
        
        echo "</div>";
    }

    /////////////////////////////////////////////////////////////////////////////////////////////
    ?> 
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