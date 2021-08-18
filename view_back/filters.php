
<?php

    $filter_mas = array();
    $filter_names = array();
    
    foreach($filter_groups as $group){
        $filter_mas[$group->id] = array();
        
        $filter_names[$group->id]=$group->name;
    }
    
    if(isset($filters))
    foreach($filters as $filter){
        $filter_mas[$filter->group_id][]=$filter;
    }   

?>

    <aside class="aside sidebar" id="filter_open">
        
        <p class="card-description" style="cursor:pointer; color: blue;"><b><a class="filters_drop_all"> Сбросить все </a>&nbsp;&nbsp;&nbsp;<a class="filters_set_all"> Включить все</a></b></p>
        <hr>
        
        
        <p class="card-description"><b>Размер</b></p>
        <hr>
        
           
            <?php 
                foreach($filter_mas[1] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>

        
        <p class="card-description"><b>Цвет</b></p>
        <hr>
        <div class="noMargin_flexbox" style="justify-content: start;">
            <?php 
                foreach($filter_mas[2] as $filter){
                    echo '<input class="filter_chk" style="width:20px;padding-left:10px;" type="checkbox" value="'.$filter->id.'" name="filters">
                          <label for="'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label>
                         ';
                }
            ?>
        </div>
        
        <p class="card-description"><b>Текстeра/Материал</b></p>
        <hr>
            <?php 
                foreach($filter_mas[3] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input  class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>
        
        <p class="card-description"><b>Для кого</b></p>
        <hr>
            <?php 
                foreach($filter_mas[4] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input  class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>
        
        <p class="card-description"><b>Коробки шаров</b></p>
        <hr>
            <?php 
                foreach($filter_mas[5] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input  class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>
        
        <p class="card-description"><b>Форма шара</b></p>
        <hr>
            <?php 
                foreach($filter_mas[6] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input  class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>
        
        <p class="card-description"><b>Другое</b></p>
        <hr>
            <?php 
                foreach($filter_mas[7] as $filter){
                    echo ' <div class="checkbox_filter">
                            <input  class="filter_chk" type="checkbox" value="'.$filter->id.'" name="filters">
                            <label for="'.$filter->id.'">'.$filter->name.'</label>
                          </div>
                        ';
                }
            ?>     

    </aside>
