<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Фильтры</title>
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

<?php echo view('admin_header'); 

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
    

    
?>  

<main class="container">

    <form method="post" action="/home/filters_delete" enctype="multipart/form-data">
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
 

                    $inner_block=$filter->name;

                    $inner_block='<div class="checkbox_filter"><input  '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'">'.$filter->name.'</label></div>'; 

                    if($group_id==2){//color

                       //$inner_block='<div><input  '.$checked.' type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'"><label for="box_'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label></div>';  
                    
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

            
            /////////////////////////////////////////////////////////////////////////////////////////////
            ?>  
         <button class="button black_button" type="submit" name="submit" value="Добавить">Удалить выбранные</button>
     </aside>
        
        
    </form>
     
         <form method="post" action="/home/filter_add" enctype="multipart/form-data">
            <p class="choice">Название фильтра (для цвета Hex-код. Пример: #00008b)</p>
            <input class="input" type="text" name="name">

                <select class="categoty margin_top" name="group_id">
                    <?php
                        $flag=0;
                    
                        if(isset($filter_groups))
                        foreach($filter_groups as $group){
                            if($flag=0){
                                echo '<option value="'.$group->id.'" selected>'.$group->name.'</option>';
                                $flag++;
                            }else{
                                echo '<option value="'.$group->id.'" selected>'.$group->name.'</option>';
                            }
                        }
                    ?>
                </select>
        
        <button class="button black_button" type="submit" name="submit" value="Добавить">Добавить</button>
    </form>


 
    
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