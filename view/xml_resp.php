
<?php

    echo '<?xml version="1.0" encoding="utf-8" ?>'
        . '<response>';
        if($messages)
        foreach($messages as $item){
            echo '<message>
                    <mes>
                        '.$item->message.'
                    </mes>
                    <time>
                        '.$item->time.'
                    </time>
                    <type>
                        '.$item->type.'
                    </type>                    
                </message>';
        }
    echo '</response>';
?>

