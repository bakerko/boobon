<?php
	include_once '../db.php';


if(isset($_POST['action'])){
	//echo 'post<br>';
	
	
	if($_POST['action']=='addto'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
		
			$exist=$db->super_query("SELECT `id` FROM `votes2` WHERE `vote_id` =".mysql_real_escape_string($id).";", true);
		
                        if(!$exist){
                            
                            
                            $row=$db->super_query("SELECT * FROM votes where vote_id=".mysql_real_escape_string($id).";", true);
                            $row=$row[0];
                            $yes_or_no=$row['yes_or_no'];
                            
                            $db->query("INSERT INTO votes2 (`id`, `vote_id`, `yes_or_no`, `count_votes`) VALUES (NULL, '".mysql_real_escape_string($id)."', '".$yes_or_no."', '0');");
                        }
        }
	
	
	
	if($_POST['action']=='add'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
		
		if(isset($_POST['yes']))
			$yes=$_POST['yes'];	
			
		if(isset($_POST['xnxx']))
			$xnxx=$_POST['xnxx'];			
		
		$exist=$db->super_query("SELECT `id` FROM `votes` WHERE `vote_id` =".mysql_real_escape_string($id).";", true);
		
		if(!$exist){
			$db->query("INSERT INTO votes (`id`, `vote_id`, `yes_or_no`, `count_votes`) VALUES (NULL, '".mysql_real_escape_string($id)."', '".mysql_real_escape_string($yes)."', '0');");
		}	
			

		if($xnxx){
			$exist=$db->super_query("SELECT `id` FROM `votes2` WHERE `vote_id` =".mysql_real_escape_string($id).";", true);
		
			if(!$exist){
				$db->query("INSERT INTO votes2 (`id`, `vote_id`, `yes_or_no`, `count_votes`) VALUES (NULL, '".mysql_real_escape_string($id)."', '".mysql_real_escape_string($yes)."', '0');");
			}
		}
	}	
	
	if($_POST['action']=='voteyes'){
		$value=$_POST['value'];
		$play_pause=$_POST['play_pause'];	
		
		$value=explode('_', $value);
		
		if($play_pause==1){
                    foreach($value as $id){
                            echo "$id ";
                            
                            if($id)
                            $db->query("UPDATE votes SET raiting='', play_pause=$play_pause WHERE yes_or_no='YES' and id=$id and sleep=0;");
                    }
                }else{
                     foreach($value as $id){
                            echo "$id ";
                            
                            if($id)
                            $db->query("UPDATE votes SET play_pause=$play_pause WHERE yes_or_no='YES' and id=$id;");
                    }                   
                }
	}
        
	
	if($_POST['action']=='all_sleep_go'){
		$db->query("UPDATE votes SET raiting='', play_pause=1, sleep=0 WHERE sleep=1;");
	}        
	
	if($_POST['action']=='pause'){

		$value=$_POST['value'];
		$id=$_POST['id'];
		
		//echo "value = $value id = $id<br>";

	    if($value==1)
	    	$db->query("UPDATE votes SET play_pause=$value, raiting='' WHERE id=$id;");
	    else 
	    	$db->query("UPDATE votes SET play_pause=$value WHERE id=$id;");
	}
	
	if($_POST['action']=='delete'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
	
		if($id){
			//echo "<br>Delete";
			$rez=mysql_query("DELETE from votes where id=$id;");
		}

	}
        
        
	if($_POST['action']=='nodel'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
	
		if($id){
			//echo "<br>Delete";
			$db->query("UPDATE votes SET deleted=0 WHERE deleted=1 and id=$id;");
		}

	}    
        
	if($_POST['action']=='delete_both'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
	
		if($id){
			//echo "<br>Delete";
			$rez=mysql_query("DELETE from votes2 where id=$id;");
                        $rez=mysql_query("DELETE from votes where id=$id;");
		}

	}           
	
	
	if($_POST['action']=='yes_no'){
		if(isset($_POST['id']))
			$id=$_POST['id'];
			
		if(isset($_POST['value']))
			$type=$_POST['value'];
	

		if($id){
			if($type=='YES'){			
				$db->query("UPDATE votes SET yes_or_no='NO' WHERE id=$id;");
			}else{
				$db->query("UPDATE votes SET yes_or_no='YES' WHERE id=$id;");
			}
		}

	}	
	
	
	if($_POST['action']=='reload'){
		if(isset($_POST['id']))
			$id=$_POST['id'];

		if($id){
			$db->query("UPDATE votes SET image='' WHERE id=$id;");
		}

	}	
	
	
}
?>
