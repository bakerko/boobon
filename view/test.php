<?


        function get_path($cur_path, $t_encode=0){
	        $t_path = "https://c8h7t4z6.ssl.hwcdn.net".$cur_path;
                return $t_path;
        }  
        
        
        $im1_path=get_path('/content/images/1923/1.jpg');
        
        echo "im1_path = $im1_path<br>";
        
echo <<<END
        <img src="$im1_path">

END;

        



