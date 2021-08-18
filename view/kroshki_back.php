<?php

    $url = $_SERVER['REQUEST_URI'];

    $is_cart=stripos($url, 'cart');
    $is_search=stripos($url, 'search');    
    
    if($is_cart||$is_search){
        echo $_SESSION['kroshki'];
    }else{
    
        $url_mas=explode('/', $url);

        $link1='<a href="/home/">Главная</a>';
        $link2='<a href="/home/">Товары</a>';

        $link3='';
        $flag=stripos($url, 'show_menu');
        if($flag){
            if($url_mas[2]=="show_menu1")$link3='<a href="/home/'.$url_mas[2].'">Латексные шары</a>';
            if($url_mas[2]=="show_menu2")$link3='<a href="/home/'.$url_mas[2].'">Фольгированные шары</a>';
            if($url_mas[2]=="show_menu3")$link3='<a href="/home/'.$url_mas[2].'">Товары для праздника</a>';
            if($url_mas[2]=="show_menu4")$link3='<a href="/home/'.$url_mas[2].'">Готовые решения</a>';
            
            
            $_SESSION['kroshki']=$link1.' / '.$link2.' / '.$link3;
        }

        $catalog_flag=stripos($url, 'show_catalog');

        $link4='';
        if($catalog_flag){
            $tmo_catalog_id=$url_mas[3];

            $menu1_ids=array(21,22,23,24,25);
            $menu2_ids=array(26,27,28,29,30,31,32);
            $menu3_ids=array(33,34,35,36,37,38);
            $menu4_ids=array(39,40);

            if(in_array($tmo_catalog_id, $menu1_ids))$link3='<a href="/home/show_menu1">Латексные шары</a>';
            if(in_array($tmo_catalog_id, $menu2_ids))$link3='<a href="/home/show_menu2">Фольгированные шары</a>';
            if(in_array($tmo_catalog_id, $menu3_ids))$link3='<a href="/home/show_menu3">Товары для праздника</a>';
            if(in_array($tmo_catalog_id, $menu4_ids))$link3='<a href="/home/show_menu4">Готовые решения</a>';

            switch($tmo_catalog_id){
                case 21:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Круглые шары без рисунка</a>';
                    break;
                case 22:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Шары с принтом</a>';
                    break;     
                case 23:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Конфетти</a>';
                    break;           
                case 24:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Агаты</a>';
                    break;    
                case 25:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Браш</a>';
                    break;    
                case 26:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Звезды, сердца, круги</a>';
                    break;    
                case 27:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Цифры</a>';
                    break;    
                case 28:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Шары гиганты, баблс, сферы</a>';
                    break;    
                case 29:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Большие фигуры из фольги</a>';
                    break;    
                case 30:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Ходячие фигуры</a>';
                    break;   
                case 31:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Ходячие фигуры</a>';
                    break;  
                case 32:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Коробки с шарами</a>';
                    break;  
                case 33:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Гирлянды</a>';
                    break;  
                case 34:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Свечи в торт</a>';
                    break;  
                case 35:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Колпачки/короны</a>';
                    break;  
                case 36:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Открытки</a>';
                    break;  
                case 37:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Подарочные пакеты</a>';
                    break;  
                case 38:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Сервировка</a>';
                    break;  
                case 39:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Готовые решения. Воздушные шары</a>';
                    break; 
                case 40:
                    $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Готовые решения. Товары для праздника</a>';
                    break;                 

            }
                
            $_SESSION['kroshki']=$link1.' / '.$link2.' / '.$link3.' / '.$link4;

        }

    }

    

    

    
 
    

            

?>