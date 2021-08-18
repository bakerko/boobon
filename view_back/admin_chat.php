<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Чат</title>
    <script src="/js/openlink.js"></script>
    <script src="/js/sidebar.js"></script>    
    
    <link rel="stylesheet" href="/styles/style.css">
    <link rel="stylesheet" href="/styles/laptop.css">
    <link rel="stylesheet" href="/styles/mobile.css">
    <link rel="stylesheet" href="/styles/tablet.css">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.1/css/all.css">
    <link rel="stylesheet" href="/styles/tablet_portrait.css">
    <link rel="stylesheet" href="/styles/mobile_320.css">
    <link rel="stylesheet" href="/styles/admin_styles.css">

</head>



<?php echo view('admin_header'); 

    $parents_mas = array();
    $parent_items = array();
    
    foreach($chat_messages as $item){
        if($item->parent_id==0){
            $parents_mas[$item->id] = array();
            $parent_items[]=$item;
        }
    }
    
    foreach($chat_messages as $item){
        if($item->parent_id!=0)
            $parents_mas[$item->parent_id][]=$item;
    }    

?>  

<main class="container">
    <aside>
        <div>
    

        <?php
        
            if(count($parent_items)>0)
            foreach($parent_items as $item){
                
                echo "<hr>";
                
                $tdata=date("d.m.Y h:m", $item->time);
                $tstring=substr($item->message, 0, 100);
                
                echo '
                    
                <div onclick="showBox(\'message_'.$item->id.'\');" class="tablet_cart cart_item pointer">
                    <div class="description height beige noMargin_flexbox tablet_description mob_desrc pos_relative">
                        <a class="center  ">Развернуть</a>
                        <b class="center ">'.$tdata.'</b>
                        <b class="center ">'.$tstring.'а</b>
                        <div class="noMargin_flexbox">
                            <a href="/home/chat_delete/'.$item->id.'"><i class="far fa-times-circle title_icon"></i></a>
                        </div>
                    </div>
                </div>

                ';
                
                
                
                
               echo '
                    <div id="message_'.$item->id.'" style="display: none">
                        
                    <div class="left_side_chat">
                        <time >'.$tdata.'</time>
                        <p class="" >'.$item->message.'</p>
                    </div>        
                ';
               
               
                foreach($parents_mas[$item->id] as $message){
                    
                    $align='left_side_chat';
                    if($message->type==1)$align='right_side_message';
                    
                    
                    $tdata=date("d.m.Y h:m", $message->time);
                    
                    echo '
                        <div class="'.$align.'">
                            <time >'.$tdata.'</time>
                            <p class="" >'.$message->message.'</p>
                        </div>                    
                    '; 
                    
                    
              
                }
                
                
                echo '

                <div class="clear"></div>
                <div class="inline-block noMargin_flexbox">
                    <form class="noMargin_flexbox" action="/home/chat_add_message_admin/1" method="post" enctype="multipart/form-data">
                        <textarea autofocus class="chat_textarea" cols="140" rows="5" type="textarea" name="message"></textarea>
                        <input type="hidden" name="parent_id" value="'.$item->id.'">
                            
                        <input class="button black_button no_margin" type="submit" name="submit" value="Ответить">
                        
                    </form>
                </div>
                
                </div>
                ';                
                
            }
        ?>
        
        
        </div>
    </aside>
</main>



<?php echo view('admin_footer'); ?>