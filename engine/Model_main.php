<?php namespace App\Models;

use CodeIgniter\Model;

class Model_main extends Model
{
    
    protected $db;
    
    public function __construct()
    {
        $this->db = \Config\Database::connect();
    }
    
    
    public function send_mail($message, $subject){

        mail(MAIN_MAIL, $subject, $message);        
    }
            
            

    
    public function get_products_filters_one($product){

        $builder = $this->db->table('product_filter');
        $query = $builder->where('product_id', $product->id);
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;          
    }    
    
    public function get_products_filters($products){
        
        $products_ids=array();
        if(isset($products))
        foreach($products as $product){
            $products_ids[]=$product->id;
        }
        
        $builder = $this->db->table('product_filter');
        $query = $builder->whereIn('product_id', $products_ids);
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;          
    }
    
    
    
    public function get_products_from_catalogs_with_filters($catalog_ids, $t_filter){

        
        $builder = $this->db->table('product');
        $query = $builder->whereIn('category', $catalog_ids);
        $query = $builder->where('default_product', 0);
        $query = $builder->where('deleted', 0);
        
        if($t_filter==1){
            $builder->orderBy('price', 'ASC');
        }elseif($t_filter==2){
            $builder->orderBy('price', 'DESC');
        }elseif($t_filter==3){
            $builder->orderBy('time', 'DESC');
        }
        
        
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;          
    }

    
    public function get_products_from_catalogs($catalog_ids){

        
        $builder = $this->db->table('product');
        $query = $builder->whereIn('category', $catalog_ids);
                 $builder->orderBy('time', 'DESC');
        $query = $builder->where('default_product', 0);
        $query = $builder->where('deleted', 0);
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;          
    }
    

    public function test(){
        echo "model _test<br>";
    }
    
    public function get_filter_groups(){
        $builder = $this->db->table('filter_groups');
        $query = $builder->get();
                
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }

    public function get_filters_by_ids($products_filters){
        
        if(!isset($products_filters))return null;  
        
        $tmp_ids=array();
        foreach($products_filters as $item){
            $tmp_ids[]=$item->filter_id;
        }
        
        $tmp_ids = array_unique($tmp_ids);
        
        $builder = $this->db->table('filters');
        $query = $builder->whereIn('id', $tmp_ids);
        $query = $builder->get();   
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;          
    }
    
    public function product_add_to_mix($mix_id, $product_id, $quant){
        
        $builder = $this->db->table('product_mix_products');
        $data = [
            'mix_id' => $mix_id,
            'product_id'  => $product_id,
            'quant' => $quant
        ];

        $builder->insert($data);
        
        $this->update_mix_price($mix_id);
    }
    
    public function product_mix_add($data){
        
        $builder = $this->db->table('product_mix');
        $data = [
            'name' => $data['name'],
            'descr'  => $data['descr']
        ];

        $builder->insert($data);
    }    
    
    public function get_chat_message_admin($filter){
        
        $builder = $this->db->table('chat_message');
        $builder->orderBy('time', 'ASC');
        
        if($filters['filter1']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter1']==2){
            $builder->where('deleted', 1);
        }        

        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;           
    }      
    
    public function get_chat_message(){
        
        $builder = $this->db->table('chat_message');
        $builder->orderBy('time', 'ASC');
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;           
    }    
    
    public function update_mix_price($mix_id){
        
        $total_price=$this->get_mix_price($mix_id);
        
        
        $builder = $this->db->table('product');
        $builder->set('price', $total_price);
        $builder->where('id', $mix_id);
        $builder->update();        
            
    }
    
    
    public function product_mix_product_quant($mix_id, $product_id, $quant){
        

        
        $builder = $this->db->table('product_mix_products');
        $builder->set('quant', $quant);
        $builder->where('mix_id', $mix_id);
        $builder->where('product_id', $product_id);
        $builder->update();  
        
        
        $this->update_mix_price($mix_id);
            
    }   
    
    
    
    
    public function get_mix_price($mix_id){
        
 
        
        $mix_products = $this->get_product_mix_products_one($mix_id);
        
        $produc_ids=array();
        $produc_quantity=array();
        
        foreach ($mix_products as $mix){
            $produc_ids[]=$mix->product_id;
            $produc_quantity[$mix->product_id]=$mix->quant;
        }
        

        if(!count($produc_ids))
            return 0;
        

        $products = $this->get_products_by_ids($produc_ids);
        
        if(!$products)
            return 0;
        
        $total_price=0;
        foreach($products as $product){
            $total_price = $total_price + $product->price*$produc_quantity[$product->id];
        }
        
        return $total_price;
    }

    
    public function get_products_by_ids($produc_ids){
        $builder = $this->db->table('product');
        $query = $builder->whereIn('id', $produc_ids);
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;            
    }
    
    
    
    public function get_product_mix_admin($filters){
        
        $builder = $this->db->table('product');
        
        /*
        echo "filter1 = ".$filters['filter1']."<br>";
        echo "filter2 = ".$filters['filter2']."<br>";
        echo "filter3 = ".$filters['filter3']."<br>";
        */
        
        if($filters['filter1']){
            $builder->where('category', $filters['filter1']);
        }
        
        if($filters['filter2']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter2']==2){
            //echo "deleted";
            $builder->where('deleted', 1);
        }        

        if($filters['filter3']==1){
            $builder->orderBy('time', 'DESC');
        }elseif($filters['filter3']==2){
            $builder->orderBy('time', 'ASC');
        }elseif($filters['filter3']==3){
            $builder->orderBy('price', 'DESC');
        }elseif($filters['filter3']==4){
            $builder->orderBy('price', 'ASC');
        }elseif($filters['filter3']==5){
            $builder->orderBy('name', 'DESC');
        }elseif($filters['filter3']==6){
            $builder->orderBy('name', 'ASC');
        } 
        
        $builder->where('is_mix', 1);
        $query = $builder->get();        

        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }
    
    public function get_product_mix_products_one($mix_id){
        $builder = $this->db->table('product_mix_products');
        $query = $builder->where('mix_id', $mix_id);
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }     
    

    public function get_product_mix_products(){
        $builder = $this->db->table('product_mix_products');
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }    
       
     public function get_orders_admin($filters){
        $builder = $this->db->table('orders');
        
        
        if($filters['filter2']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter2']==2){
            //echo "deleted";
            $builder->where('deleted', 1);
        }        

        if($filters['filter3']==1){
            $builder->orderBy('c_time', 'DESC');
        }elseif($filters['filter3']==2){
            $builder->orderBy('c_time', 'ASC');
        }elseif($filters['filter3']==3){
            $builder->orderBy('sum', 'DESC');
        }elseif($filters['filter3']==4){
            $builder->orderBy('sum', 'ASC');
        }     
        
        
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }       
       
     public function get_orders(){
        $builder = $this->db->table('orders');
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }
    
    
    public function get_order_product(){
        $builder = $this->db->table('order_product');
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }
    
     
    
    
    public function get_filters(){
        $builder = $this->db->table('filters');
        $query = $builder->get();
        
        if($query)
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;        
    }
    
    public function product_change($data){
        
        $id=$data['id'];
        
        $builder = $this->db->table('product');
        $ctime = time();
                
        $data2 = [
            'name'  => $data['name'],
            'descr'  => $data['descr'],
            'price'  => $data['price'],
            'category'  => $data['category'],
            'size'  => $data['size'],
            'material'  => $data['material'],
            'artikul'  => $data['artikul'],
            'country'  => $data['country']                
        ];

        
        $builder->where('id', $id);
        $builder->set($data2);  
        $builder->update();   
        
        
        $this->delete_filters_from_product($id);
        $this->add_filters_to_product($id, $data['filters_ids']);


        
        if($data['image1']['tmp_name']!='')
            $this->upload_one_image($data['image1'], $id, 1);
        
        if($data['image2']['tmp_name']!='')
            $this->upload_one_image($data['image2'], $id, 2);

        if($data['image3']['tmp_name']!='')
            $this->upload_one_image($data['image3'], $id, 3);

        if($data['image4']['tmp_name']!='')
            $this->upload_one_image($data['image4'], $id, 4);   

    }    
    
    public function delete_filters_from_product($product_id){
        $builder = $this->db->table('product_filter');
        $builder->where('product_id', $product_id);
        $builder->delete();  
    }    
    
    public function add_filters_to_product($product_id, $filter_ids){
        
        if(!isset($filter_ids ))return 0;
        
        
        $builder = $this->db->table('product_filter');
        
        $data = array();
        
        foreach($filter_ids as $filter_id){
            
           $oneline['filter_id']=$filter_id;
           $oneline['product_id']=$product_id;
            
           $data[]=$oneline;
        }
        
        
        $builder->insertBatch($data);          
        
    }
    
    
    
    
    public function product_add($data){
        
        
        $builder = $this->db->table('product');
        $ctime = time();
                
        $data2 = [
            'time'  => $ctime,
            'name'  => $data['name'],
            'descr'  => $data['descr'],
            'price'  => $data['price'],
            
            'artikul'  => $data['artikul'],
            'is_mix'  => $data['is_mix'],
            
            'size'  => $data['size'],
            'material'  => $data['material'],
            'country'  => $data['country'],
            
            'category'  => $data['category']
        ];
      
        
        $builder->insert($data2);   
        

        
        $t_id=$this->db->insertID();
        
        
        $this->add_filters_to_product($t_id, $data['filters_ids']);

        
        if($data['image1']['tmp_name']!='')
            $this->upload_one_image($data['image1'], $t_id, 1);
        
        if($data['image2']['tmp_name']!='')
            $this->upload_one_image($data['image2'], $t_id, 2);

        if($data['image3']['tmp_name']!='')
            $this->upload_one_image($data['image3'], $t_id, 3);

        if($data['image4']['tmp_name']!='')
            $this->upload_one_image($data['image4'], $t_id, 4);   

    }
    
    public function upload_one_image($file, $id, $counter){
        $target_dir = "/content/images/$id/";
        
        $root = $_SERVER["DOCUMENT_ROOT"];
        $dir = $root . $target_dir;


        if (!file_exists($dir)) {
            mkdir($dir, 0755, true);
        }
               
        $target_file = $target_dir.$counter.'.';   

        
        $check = getimagesize($file["tmp_name"]);
        if($check === false) {
            return null;
        }
        
        $imageFileType = strtolower(pathinfo($file["name"],PATHINFO_EXTENSION));
        
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
        && $imageFileType != "gif" ) {
          return null;
        }
        
        $target_file = $target_file.$imageFileType;

        
        /*
        if(file_exists($root.$target_file)){
            echo "exist<br>";
            unlink($root.$target_file);
        }
        */
        move_uploaded_file($file["tmp_name"], $root.$target_file);
        
    }




    public function admin_decoration_accept($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('decoration_order');
        $builder->set('accepted', 1);
        $builder->where('id', $id);
        $builder->update();        
    }
        
    public function admin_decoration_delete($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('decoration_order');
        $builder->set('deleted', 1);
        $builder->where('id', $id);
        $builder->update();  
    }



    public function get_decoration_orders($filters){
        
        $builder = $this->db->table('decoration_order');
        
        if($filters['filter1']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter1']==2){
            $builder->where('deleted', 1);
        }  
        
        $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }
    
    
    public function filter_add($data){
        $builder = $this->db->table('filters');
        $builder->insert($data); 
    }
    
    public function order_add($data){
        


        
        $builder = $this->db->table('orders');
        $c_time=time();


        $data_insert = [
            'name' => $data['name'],
            'phone'  => $data['phone'],
            
            'type'  => $data['type'],
            'c_time'  => $c_time,
            
            'adress'  => $data['adress'],
            
            'time'  => $data['time'],
            'date'  => $data['date'],
            
            'sum'  => $data['total_price']
        ];
        
        //var_dump($data_insert);
        
        $builder->insert($data_insert);  
        
        
        $tmp_data=date("d.m.Y h:m", $c_time);
        
        $delivery='По городу';
        if($data['type']==2)
            $delivery='Новая почта';
        
        $subject = "Boobon.com.ua - Заказ товаров.";
        $message = 'В '.$tmp_data .' '.$data['name'].' сделал  заказ. Номер телефона: '.$data['phone'].'. На общую сумму: '.$data['total_price'].' грн. 
            Желаемая дата доставки: '.$data['date'].'.  Желаемое время доставки: '.$data['time'].'.
            Способ доставки: '.$delivery.'.  Адрес доставки: '.$data['adress'].'. 
            Список товаров можно просмотреть в админке сайта.
            ';

        $this->send_mail($message, $subject);        
        

        $order_id=$this->db->insertID();
        
     
        $this->add_order_products($order_id, $data['cart_list']);  

    }
    
    public function add_order_products($order_id, $cart_list){
        
        $builder = $this->db->table('order_product');
        
        $data = array();
        
        foreach($cart_list as $product_id=>$quant){
            
           $oneline['order_id']=$order_id;
           $oneline['product_id']=$product_id;
           $oneline['quant']=$quant;
            
           $data[]=$oneline;
        }
        
        
        $builder->insertBatch($data);  
    }
    
    public function product_mix_delete($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('product');
        $builder->set('deleted', 1);
        $builder->where('id', $id);
        $builder->update();  
    } 
    
    public function product_delete($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('product');
        $builder->set('deleted', 1);
        $builder->where('id', $id);
        $builder->update();  
    }  
    
    
    public function order_delete($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('orders');
        $builder->set('deleted', 1);
        $builder->where('id', $id);
        $builder->update();  
    }  
    
    
    public function chat_delete($parent_id){
        

        $builder = $this->db->table('chat_message');
        $builder->where('parent_id', $parent_id);
        $builder->delete();  
        
        $builder = $this->db->table('chat_message');
        $builder->where('id', $parent_id);
        $builder->delete();          
    }      
    
    
    public function order_accept($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('orders');
        $builder->set('accepted', 1);
        $builder->where('id', $id);
        $builder->update();  
    }       

    
    public function filter_delete($id){
        
        if(!$id)return null;
        
        $builder = $this->db->table('filters');
        $builder->where('id', $id);
        $builder->delete();  
    }      
    
    public function filters_delete($filters_ids){
        
        if(!$filters_ids)return null;
        
        $builder = $this->db->table('filters');
        $builder->whereIn('id', $filters_ids);
        $builder->delete();  
        
        $builder = $this->db->table('product_filter');
        $builder->whereIn('filter_id', $filters_ids);
        $builder->delete();          
        
    }      
    
    
    
    public function product_mix_product_delete($mix_id, $product_id){
        
        if(!$mix_id||!$product_id)return null;
        
        $builder = $this->db->table('product_mix_products');
        $builder->where('mix_id', $mix_id);
        $builder->where('product_id', $product_id);
        $builder->delete();  
    }      
    
    
    
    public function get_cart_products($products){
        
        if(!isset($products)) return array();
            
        if(!count($products)){
            return array();
        }
        
        $ids=array();
        foreach($products as $key=>$val){
            if($val>0)
                $ids[]=$key;
        }
        
        $builder = $this->db->table('product');
        $query = $builder->whereIn('id', $ids);
        $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }

        return array();
        
    }

    
    
    public function get_products_admin($filters){
        
        $builder = $this->db->table('product');
        
        if($filters['filter1']){
            $builder->where('category', $filters['filter1']);
        }
        
        if($filters['filter2']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter2']==2){
            $builder->where('deleted', 1);
        }        

        if($filters['filter3']==1){
            $builder->orderBy('time', 'DESC');
        }elseif($filters['filter3']==2){
            $builder->orderBy('time', 'ASC');
        }elseif($filters['filter3']==3){
            $builder->orderBy('price', 'DESC');
        }elseif($filters['filter3']==4){
            $builder->orderBy('price', 'ASC');
        }elseif($filters['filter3']==5){
            $builder->orderBy('name', 'DESC');
        }elseif($filters['filter3']==6){
            $builder->orderBy('name', 'ASC');
        } 
        
        $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }
    
    public function get_products_admin_search($filters, $search_text){
        
        $builder = $this->db->table('product');
        
        $builder->like('descr', $search_text);
        $builder->orLike('name', $search_text);
        $builder->orLike('artikul', $search_text);

        //echo "search_text = $search_text";
        
        
        
        if($filters['filter1']){
            $builder->where('category', $filters['filter1']);
        }
        
        if($filters['filter2']==1){
            $builder->where('deleted', 0);
        }elseif($filters['filter2']==2){
            $builder->where('deleted', 1);
        }        

        if($filters['filter3']==1){
            $builder->orderBy('time', 'DESC');
        }elseif($filters['filter3']==2){
            $builder->orderBy('time', 'ASC');
        }elseif($filters['filter3']==3){
            $builder->orderBy('price', 'DESC');
        }elseif($filters['filter3']==4){
            $builder->orderBy('price', 'ASC');
        }elseif($filters['filter3']==5){
            $builder->orderBy('name', 'DESC');
        }elseif($filters['filter3']==6){
            $builder->orderBy('name', 'ASC');
        } 
        

        
        $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }    
    
    
    
    
    public function get_product_mix(){
        
        $builder = $this->db->table('product');
        $builder->where('is_mix', 1);
        $builder->where('deleted', 0);
        
        $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }    
    
    public function get_products($id=0){
        
        $builder = $this->db->table('product');
        if($id){
            $query = $builder->getWhere(['id' => $id]);
        }else{
            $query = $builder->getWhere(['deleted'=>0]);
        }
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }
    
    public function products_search($text){
        
        $builder = $this->db->table('product');
        

        $query = $builder->like('descr', $text);
        $query = $builder->orLike('name', $text);


        if($t_filter==1){
            $builder->orderBy('price', 'ASC');
        }elseif($t_filter==2){
            $builder->orderBy('price', 'DESC');
        }elseif($t_filter==3){
            $builder->orderBy('time', 'DESC');
        }        
        
        $query = $builder->get();

        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }    
    
    
    public function get_default_products(){
        
        $builder = $this->db->table('product');
        $query = $builder->getWhere(['default_product' => 1]);

        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }
    
    public function get_category($id=0){
        
        $builder = $this->db->table('category');
        if($id){
            $query = $builder->getWhere(['id' => $id]);
        }
        
         $query = $builder->get();
        
        if($query->getResult()){
            return $query->getResult();     
        }
        
        return null;
    }
    
    

    public function add_user($ip){
        $exist = $this->get_user_by_ip($ip);

        if(!$exist){
            $ctime=time();
            
            $builder = $this->db->table('user');
            $data = [
                'ip' => $ip,
                'time'  => $ctime,
            ];
                    
            $builder->insert($data);
        }else{
            return $exist;
        }
    }
    
    public function get_messages_from_user($user_id){
        
        $builder = $this->db->table('chat_message');
        
        $query = $builder->orderBy('time', 'ASC');
        $query = $builder->where('user_id', $user_id);
        $query = $builder->get();   
        
        if($query)
        if($query->getResult()){
            return $query->getResult();
        }
        
        return 0;           
    }
    
    
    public function chat_add_message_admin($data){
        
        $user_id=1;
        $ctime=time();
        
        $builder = $this->db->table('chat_message');
        $data = [
            'parent_id' => $data['parent_id'],
            'time'  => $ctime,
            'message'  => $data['message'],
            'type'  => 1
        ];

        $builder->insert($data);    
        
        return $user_id;
    }

    
    
    public function chat_add_message($message, $cur_ip){
        $user_id=0;
        if(isset($cur_ip)){
            
            $this->add_user($cur_ip);
            $user = $this->get_user_by_ip($cur_ip);
            

            if($user)
                $user_id = $user->id;
        }   
        
        $parent_id=$this->get_parent_id($user_id);
        $ctime=time();
        
        
        $builder = $this->db->table('chat_message');
        $data = [
            'parent_id' => $parent_id,
            'time'  => $ctime,
            'message'  => $message,
            'user_id'  => $user_id
        ];

        $builder->insert($data);    
        
        return $user_id;
    }
    
    
    public function get_parent_id($user_id){
        
        $builder = $this->db->table('chat_message');
        $query = $builder->where('user_id', $user_id);
        $query = $builder->where('parent_id', 0);
        $query = $builder->get();

        if($query)
        if($query->getResult()){
            foreach ($query->getResult() as $row){
                return $row->id;
            }     
        }
        
        return 0;        
    }
    
    
    public function get_user_by_ip($ip){

        $builder = $this->db->table('user');
        $query = $builder->getWhere(['ip' => $ip]);

        if($query->getResult()){
            foreach ($query->getResult() as $row){
                return $row;
            }     
        }else{
            return null;
        }
    }
    
    public function add_decoration_order($data){


        
        $ctime=time();
        

        
        $builder = $this->db->table('decoration_order');

        $data = [
            'time'  => $ctime,
            'phone'  => $data['phone'],
            'name'  => $data['name'],
            'descr'  => $data['descr']
        ];
        
        $builder->insert($data);
        
        $tmp_data=date("d.m.Y h:m", $ctime);
        
        $subject = "Boobon.com.ua - Заказ на оформление.";
        $message = "В $tmp_data ".$data['name']." оставил телефон ".$data['phone']." и описание заказа: \"".$data['descr']."\". Приятного вам дня.";
        
        $this->send_mail($message, $subject);
        
    }   

    public function login($password){
        
    }
    
}