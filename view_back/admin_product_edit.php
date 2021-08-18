<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Редактирование товара</title>
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
 
    
     <form method="post" action="/home/product_change" enctype="multipart/form-data">
         <input type="hidden" name="id" value="<?php echo $product->id;?>">
    <table width="70%" align="center">
        <tr>
            <td>ID - <?php echo $product->id;?></td>
            <td>Название</td><td><input type="text" name="name" value="<?php echo $product->name;?>"></td>
            <td>Описание</td><td><input type="text" name="descr" value="<?php echo $product->descr;?>"></td>
            <td>Цена</td><td><input type="text" name="price" value="<?php echo $product->price;?>"></td>
            
            <td>Размер</td><td><input type="text" name="size"  value="<?php echo $product->size;?>"></td>
            <td>Материал</td><td><input type="text" name="material"  value="<?php echo $product->material;?>"></td>
            <td>Страна</td><td><input type="text" name="country"  value="<?php echo $product->country;?>"></td>              
        </tr>
        
        <tr>
            <td>
                <select name="category">
                    <?php
                        if(isset($category))
                        foreach($category as $item){
                            $tselected='';
                            if($item->id==$product->category)$tselected="selected";
                            
                            echo '<option value="'.$item->id.'" '.$tselected.'>'.$item->name.'</option>';
                        }
                    ?>
                </select>
            </td>
        </tr>        
        
        <tr>
            <td><img width="200" src="/content/images/<?php echo $product->id;?>/1.jpg" /></td> <td><input type="file" name="image1" id="fileToUpload"></td>
            <td><img width="200" src="/content/images/<?php echo $product->id;?>/2.jpg" /><input type="file" name="image2" id="fileToUpload"></td>
            <td><img width="200" src="/content/images/<?php echo $product->id;?>/3.jpg" /><input type="file" name="image3" id="fileToUpload"></td>
            <td><img width="200" src="/content/images/<?php echo $product->id;?>/4.jpg" /><input type="file" name="image4" id="fileToUpload"></td>
        </tr>
        
        
        <tr>
            <td colspan="2">
                
    <?php ////////////////////////////////////////////////////////////////////////////////////
    
    echo '<table width="70%" align="center">';
    
    
    $filter_mas = array();
    $filter_names = array();
    
    foreach($filter_groups as $group){
        $filter_mas[$group->id] = array();
        
        $filter_names[$group->id]=$group->name;
    }
    
    foreach($filters as $filter){
        $filter_mas[$filter->group_id][]=$filter;
    }      
    
    $tmp_filters=array();
    if(isset($products_filters))
    foreach($products_filters as $item){
        $tmp_filters[$item->filter_id]=1;
    }

    if(isset($filter_names))
    foreach($filter_names as $group_id=>$group_name){
        
        if(isset($filter_mas[$group_id]))
        if(count($filter_mas[$group_id])>0){
            
        }else{
            continue;
        }
        
        echo '
            <tr>
                <td colspan=2>'.$group_name.'</td>
            </tr>
        ';
        


        foreach($filter_mas[$group_id] as $filter){
       
            $inner_block=$filter->name;
            
            $checked='';
            if(isset($tmp_filters[$filter->id]))
                $checked='checked';

            $inner_block='<input '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'">'.$filter->name.'</label>'; 

            if($group_id==2){//color

               $inner_block='<input '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label>';  
            }       
            
            
    ?>

            <tr>
                <td></td>
                <td><?php echo $inner_block;?></td>

            </tr>
    
     <?php
        }
    }
    
    echo '</table>';
    /////////////////////////////////////////////////////////////////////////////////////////////
    
    // 
    ?>         
        
    </td>   
    </tr>
        
        
        <tr>            
            <td colspan=2><input type=submit name="submit" value="Изменить"></td>
        </tr>

    </form>   
    
    <br>
    <br>
    
    <?php
        if(!$product->is_mix){
    ?>  
    
    <tr>
        <td>    
            <form method="post" action="/home/product_add_to_mix/<?php echo $product->id; ?>">
                <select name="mix_id">
                    <?php
                        if(isset($product))
                        foreach($product_mix as $item){
                            echo '<option value="'.$item->id.'">'.$item->name.'</option>';
                        }
                    ?>
                </select>
                Количество: <input type=text name="quant" value="">
                <input type=submit name="submit" value="Добавить товар в сборный">
            </form>
        </td>

    </tr>
   
    <?php
        }
    ?>
    
    
    
      </table>  
    <br>

    
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