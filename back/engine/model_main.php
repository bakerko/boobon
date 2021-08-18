<?php
class Model_main extends Model {

	function Model_main()
	{
		parent::Model();
	}
	
    function add_user($ip){
        $exist = $this->get_user_by_ip($ip);
        
        if(!$exist){
            $ctime=time();
            $this->db->insert('user', array('ip'=>$ip, 'time'=>$ctime));
        }
    }
    
    function get_user_by_ip($ip){
        $query=$this->db->where('ip', $ip);
        $query=$this->db->get('user');

        if($query->result()){
            foreach ($query->result() as $row){
                return $row;
            }     
        }else{
            return null;
        }
    }
    
    public function add_decoration_order($data){
        
        echo "model";
        
        $this->add_user($data['ip']);
        $user = $this->get_user_by_ip($ip);
        
        $ctime=time();
        
        $this->db->insert('decoration_order', array('user_id'=>$user->id, 'time'=>$ctime, 'phone'=>$data['phone'], 'name'=>$data['name'], 'descr'=>$data['descr']));
        
    }    	

	
	
}