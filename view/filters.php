
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

<style>
    .inline-flex {
    display: inline-flex;
    margin: 8px 12px 8px 0;
    background-color: ghostwhite;
}
    </style>

    <aside class="aside sidebar" id="filter_open">

        
        <p class=""><b>Размер</b></p>
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

        
        <p class=""><b>Цвет</b></p>
        <hr>
        <div class="">
            <?php 
                foreach($filter_mas[2] as $filter){
                    /*
                    echo '<div><input class="filter_chk" style="width:20px;padding-left:10px;" type="checkbox" value="'.$filter->id.'" name="filters">
                          <label for="'.$filter->id.'"><div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div></label></div>
                         ';
                    */
                    echo '
                        <div class="inline-flex">
                           <input style="margin-top:6px;" type="checkbox" id="box_'.$filter->id.'" name="filters_ids[]" value="'.$filter->id.'" ><label for="box_'.$filter->id.'">
                           <div style="width: 25px;height: 25px; border-radius: 5px; background-color: '.$filter->name.'"></div>
                        </label></div>
                      ';
                }
            ?>
        </div>
        
        <p class=""><b>Тип Шара</b></p>
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
        
        <p class=""><b>Повод</b></p>
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
        
        <p class=""><b>Другое</b></p>
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

        <button class="button black_button filters_drop_all">Сбросить всё</button>
 

    </aside>
    
