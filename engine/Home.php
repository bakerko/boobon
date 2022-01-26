<?php namespace App\Controllers;

use App\Models\Model_main;
use CodeIgniter\Controller;
use CodeIgniter\HTTP\IncomingRequest;

class Home extends BaseController
{
        private $model_main;
        protected $request;
        private $session;
    
        public function __construct()
        {
            $this->model_main = new Model_main();
            $this->session = session();//\Config\Services::session();
        }

        
   public function product_mix_product_quant(){
        $request = service('request');
        
        $mix_id = $request->getVar('mix_id');
        $product_id = $request->getVar('product_id');
        $quant = $request->getVar('quant');
        
        $this->model_main->product_mix_product_quant($mix_id, $product_id, $quant);
        $this->admin_product_mix();
   }     
    

   public function chat_add_message_admin(){


        $request = service('request');
        
        $data['message'] = $request->getVar('message');
        $data['parent_id'] = $request->getVar('parent_id');


        $this->model_main->chat_add_message_admin($data);
 

       $this->admin_chat();
   }   
   
   public function chat_add_message($message){
       

        
       $cur_ip=$this->get_ip();

       $user_id = $this->model_main->chat_add_message($message, $cur_ip);
 
       $data['messages'] = $this->model_main->get_messages_from_user($user_id);

       echo view('xml_resp', $data);  
   }
   
   public function chat_get_messages(){

       $cur_ip=$this->get_ip();
       
              
       $user = $this->model_main->get_user_by_ip($cur_ip);
       
       $user_id=0;
       if($user){
           $user_id=$user->id;
       }

       $data['messages'] = $this->model_main->get_messages_from_user($user_id);

       echo view('xml_resp', $data);  
   }
   
   function update_all_prices(){
       $this->model_main->update_all_prices();
   }
   
   function admin_product_mix(){
       
       $this->access();
       
            if(!isset($_SESSION['admin_product_mix_filter1']))$_SESSION['admin_product_mix_filter1']=0;
            if(!isset($_SESSION['admin_product_mix_filter2']))$_SESSION['admin_product_mix_filter2']=1;
            if(!isset($_SESSION['admin_product_mix_filter3']))$_SESSION['admin_product_mix_filter3']=1;
            
            $filters['filter1']=$_SESSION['admin_product_mix_filter1'];
            $filters['filter2']=$_SESSION['admin_product_mix_filter2'];
            $filters['filter3']=$_SESSION['admin_product_mix_filter3'];
            

            //$data['products']=$this->model_main->get_products();
            
            $data['products']=$this->model_main->get_products_all();
       
       $data['category']=$this->model_main->get_category();
       
       $data['filter_groups']=$this->model_main->get_filter_groups();
       $data['filters']=$this->model_main->get_filters();         
       
       $data['product_mix']=$this->model_main->get_product_mix_admin($filters);

       $data['product_mix_products']=$this->model_main->get_product_mix_products();

       
       echo view('admin_product_mix', $data);  
   }    
   


   function admin_orders(){
       
       $this->access();
       

        if(!isset($_SESSION['admin_order_filter2']))$_SESSION['admin_order_filter2']=1;
        if(!isset($_SESSION['admin_order_filter3']))$_SESSION['admin_order_filter3']=1;

        $filters['filter1']=0;
        $filters['filter2']=$_SESSION['admin_order_filter2'];
        $filters['filter3']=$_SESSION['admin_order_filter3'];       
       
       
       $data['products']=$this->model_main->get_products();
       
       
       $data['orders']=$this->model_main->get_orders_admin($filters);
       $data['order_product']=$this->model_main->get_order_product();
                
       
       echo view('admin_orders', $data);  
   } 

   
   function admin_chat(){
       $this->access();

        if(!isset($_SESSION['admin_chat_filter1']))$_SESSION['admin_chat_filter1']=1;
        $filters['filter1']=$_SESSION['admin_chat_filter1'];       
       
       $data['chat_messages']=$this->model_main->get_chat_message_admin($filters);
       
       echo view('admin_chat', $data);  
   }   
   
        
   function get_ip()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP']))
        {
            $ip=$_SERVER['HTTP_CLIENT_IP'];
        }
        elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
        {
            $ip=$_SERVER['HTTP_X_FORWARDED_FOR'];
        }
        else
        {
            $ip=$_SERVER['REMOTE_ADDR'];
        }
        return $ip;
    }
    
    
    function update_total_price(){
        $tmp_total_price=0;
        
        if(isset($_SESSION['products']))
        foreach($_SESSION['products'] as $product=>$quant){
            $tmp_total_price=$tmp_total_price+$_SESSION['prices'][$product]*$quant;
        }

        
        $_SESSION['total_price']=$tmp_total_price;
        
        
        return $tmp_total_price;
    }
    
    
    public function add_default_product($id, $price, $type){
        //$this->access();

        if($type){
            $_SESSION['prices'][$id]=$price;
            $_SESSION['products'][$id]=$type;            
        }else{
            $_SESSION['prices'][$id]=$price;
            $_SESSION['products'][$id]=$type;               
        }

        $tmp_price = $this->update_total_price();
        
        echo $tmp_price;
    }

    
    public function add_product_from_mix_js($mix_id){
        
        $mix_products=$this->model_main->get_product_mix_products_one($mix_id);
        
        if(!$mix_products)return;
        
        $produc_ids=array();
        $produc_quantity=array();
        
        foreach ($mix_products as $mix){
            $produc_ids[]=$mix->product_id;
            $produc_quantity[$mix->product_id]=$mix->quant;
        }
        
        
        $products = $this->model_main->get_products_by_ids($produc_ids);
        
        if($products)
        foreach($products as $product){
            $this->cart_add_product($product->id, $product->price, $produc_quantity[$product->id]);
        }

        $tmp_price = $this->update_total_price();
       
        echo $tmp_price;
    }    
    
    public function cart_add_products_from_mix($mix_id){
        $mix_products=$this->model_main->get_product_mix_products_one($mix_id);
        
        if(!$mix_products)return;
        
        $produc_ids=array();
        $produc_quantity=array();
        
        foreach ($mix_products as $mix){
            $produc_ids[]=$mix->product_id;
            $produc_quantity[$mix->product_id]=$mix->quant;
        }
        
        $products = $this->model_main->get_products_by_ids($produc_ids);
        
        if($products)
        foreach($products as $product){
            $this->cart_add_product($product->id, $product->price, $produc_quantity[$product->id]);
        }

    }
    
    
    function product_card_mix($mix_id){
       
        $mix_products=$this->model_main->get_product_mix_products_one($mix_id);
        
        $produc_ids=array();
     
        if($mix_products)
        foreach ($mix_products as $mix){
            $produc_ids[]=$mix->product_id;
        }
        
        
        $data['mix']=$this->model_main->get_products($mix_id);
        
        $data['products'] =0;
        if(count($produc_ids)>0)
            $data['products'] = $this->model_main->get_products_by_ids($produc_ids); 

        
        $data['mix_products'] = $mix_products; 
 
       
        echo view('product_card_mix', $data);  
   }     
    
    public function add_product_js($id, $price,  $quant=1){

        if(!$quant){
            if(isset($_SESSION['tmp_quant']))
                $quant=$_SESSION['tmp_quant'];
            else
                $quant=1;
        }
        
        $_SESSION['prices'][$id]=$price;
        $_SESSION['products'][$id]+=$quant;

        
        $this->update_total_price();
 
        echo $_SESSION['total_price'];
    }    
    
    
    public function cart_add_product($id, $price,  $quant=1){

        if(!$quant){
            if(isset($_SESSION['tmp_quant']))
                $quant=$_SESSION['tmp_quant'];
            else
                $quant=1;
        }
        
        $_SESSION['prices'][$id]=$price;
        $_SESSION['products'][$id]+=$quant;

        
        $this->update_total_price();
 
        //$this->main_page();
    }
    
    public function add_decoration_order(){
        $this->access();
        
        $request = service('request');

        $data['name']= $request->getVar('name');
        $data['phone']= $request->getVar('phone');
        $data['descr']= $request->getVar('descr');
  
        $this->model_main->add_decoration_order($data);
        
        
        $this->index();
    }
    
        public function load_location($location=0){
            //тут перенаправление на локейшин с учетом фильтров и сортировок
            //переход через жту функцию из:
            //Корзины, описания товара и тд
            //Нажание Назад
            
            //Switch
        }
	
	public function index()
	{
            $_SESSION['ip']=$this->get_ip();
            $_SESSION['location']=0;
            
            $this->main_page();
	}
        
        public function main_page(){
            
            if(!isset($_SESSION['ip']))
                $_SESSION['ip']=$this->get_ip();
            
            $_SESSION['location']=0;

            $data['doc_root']=$_SERVER["DOCUMENT_ROOT"];

            
            $data['names']=[
                'products1'=>'С Любовью',
                'products2'=>'Для детей',
                'products3'=>'Для нее',
                'products4'=>'Для него',
                'products5'=>'На выписку',
                'products6'=>'На девичник'
            ];
            
            
            $catalog_ids=array(21,22,23,24,25);
            $data['products1']=$this->model_main->get_products_from_catalogs($catalog_ids);     
            
            $catalog_ids=array(26,27,28,29,30,31,32);
            $data['products2']=$this->model_main->get_products_from_catalogs($catalog_ids);     
            
            $catalog_ids=array(33,34,35,36,37,38);
            $data['products3']=$this->model_main->get_products_from_catalogs($catalog_ids);     
            
            $catalog_ids=array(39,40);            
            $data['products4']=$this->model_main->get_products_from_catalogs($catalog_ids);     

            $catalog_ids=array(53,111);            
            $data['products5']=$this->model_main->get_products_from_catalogs($catalog_ids);    

            $catalog_ids=array(79);            
            $data['products6']=$this->model_main->get_products_from_catalogs($catalog_ids);    
            
            echo view('main_page', $data);   
        }
        
  	public function test()
	{
            
            $data['doc_root']=$_SERVER["DOCUMENT_ROOT"];            
            
            $data['names']=array('С Любовью','С Днём Рождения','Для детей','Для нее','Для него','На выписку','На девичник');            
            $category=39;
            

            $catalog_ids=array(122, 99);
            $data['products1']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);     
            
            $catalog_ids=array(109);
            $data['products2']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);     
            
            $catalog_ids=array(80, 112, 113,100,78,77,97);
            $data['products3']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);     
            
            $catalog_ids=array(95, 79);            
            $data['products4']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);     
            
            $catalog_ids=array(118,78,119,77,96);            
            $data['products5']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);               

            $catalog_ids=array(53,111);            
            $data['products6']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);    

            $catalog_ids=array(79);            
            $data['products7']=$this->model_main->get_products_by_tags_and_category($catalog_ids, $category);   
            
            echo view('main_page_test', $data);   
	}        
        
 	public function development()
	{
		echo view('development');
	}   
 
        
	public function contacts()
	{
		echo view('contacts');
	}  
        
	public function admin_filter()
	{
            $this->access();

            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
            $data['filters']=$this->model_main->get_filters();
            
            echo view('admin_filter', $data);
	}  
        
 	public function faq()
	{
		echo view('faq');
	}  
        
        
        public function cart_clear(){

            unset($_SESSION['total_price']);
            unset($_SESSION['products']);
            unset($_SESSION['puckage']);
             
            $this->cart();
        }
        
        
 	public function checkout_done()
	{
            $data['cart_list']= $_SESSION['products'];
            $data['total_price']=$_SESSION['total_price'];
            
            unset($_SESSION['total_price']);
            unset($_SESSION['products']);
            unset($_SESSION['puckage']);
            
            if(count($data['cart_list'])>0){
                $reqest_ids;
                foreach($data['cart_list'] as $key=>$val){
                    $reqest_ids[]=$key;
                }
                
                $products = $this->model_main->get_products_by_ids($reqest_ids);   
            }
            
            $data['products']=$products;
            
            $this->model_main->get_products_by_ids($data['cart_list']);            
            
             
            echo view('checkout_done', $data);
	}   
        
 	public function feed_xml()
	{

            $products = $this->model_main->get_products_all();   
 
            $data['products']=$products;
            
            $this->response->setHeader('Content-Type', 'text/xml');
        
            echo view('feed_xml', $data);
	}        
        
 	public function checkout()
	{
            $request = service('request');
            
            $package=0;
            
            $check1= $request->getVar('check1');
            $check2= $request->getVar('check2');
            
            if($check1&&!$check2)$package=1;
            
            if(!$check1&&$check2)$package=2;
            
            if($check1&&$check2)$package=3;
            
            $_SESSION['package']=$package;
                    
            echo view('checkout');
	}  
        
        
        public function order_add(){
            $request = service('request');
            
            $data['name']= $request->getVar('name');
            $data['phone']= $request->getVar('phone');
            
            $data['type']= $request->getVar('type');   
            $data['adress']= $request->getVar('adress');   
            
            $data['date']= $request->getVar('date');   
            $data['time']= $request->getVar('time');              

            
            $data['cart_list']= $_SESSION['products'];

            $data['total_price']= $_SESSION['total_price'];

            
            $this->model_main->order_add($data);
            
            $this->checkout_done();
        }
        
        public function order_accept($order_id){
            
            $this->model_main->order_accept($order_id);
            $this->admin_orders();
        }
        
        public function order_delete($order_id){
            
            $this->model_main->order_delete($order_id);
            $this->admin_orders();
        }
        
        
 	public function cart()
	{
            
            $data['cart_list'] = $_SESSION['products'];
            $data['products'] = $this->model_main->get_cart_products($data['cart_list']);
            
            $data['default_products']= $this->model_main->get_default_products();
            
            echo view('cart', $data);
	}  
        
        public function cart_remove_product($product_id){
            
            unset($_SESSION['prices'][$product_id]);
            unset($_SESSION['products'][$product_id]);

        
            $this->update_total_price();
            
            $this->cart();
        }
        
        
  	public function delivery_payment()
	{
		echo view('delivery_payment');
	}        
        
        public function adminka()
        {
            $this->access();
            
            	echo view('adminka');
        }
        

        
        public function admin_decoration()
        {
            $this->access();

            if(!isset($_SESSION['admin_decoration_filter1']))$_SESSION['admin_decoration_filter1']=1;
            $filters['filter1']=$_SESSION['admin_decoration_filter1'];
            
            $data['orders']=$this->model_main->get_decoration_orders($filters);
            echo view('admin_decoration', $data);
        }   
        
        public function admin_decoration_delete($id)
        {
            $this->access();
            
                $this->model_main->admin_decoration_delete($id);
            	$this->admin_decoration();
        }        
        
        public function admin_decoration_accept($id)
        {
            $this->access();
            
                $this->model_main->admin_decoration_accept($id);
            	$this->admin_decoration();
        } 

        
        public function search_admin()
        {
            
            $this->access();
            
            $request = service('request');
            
            $search_text= $request->getVar('search_text');

            

            $data['category']=$this->model_main->get_category();

            if(!isset($_SESSION['admin_product_filter1']))$_SESSION['admin_product_filter1']=0;
            if(!isset($_SESSION['admin_product_filter2']))$_SESSION['admin_product_filter2']=1;
            if(!isset($_SESSION['admin_product_filter3']))$_SESSION['admin_product_filter3']=1;
            
            $filters['filter1']=$_SESSION['admin_product_filter1'];
            $filters['filter2']=$_SESSION['admin_product_filter2'];
            $filters['filter3']=$_SESSION['admin_product_filter3'];

            
            $data['products']=$this->model_main->get_products_admin_search($filters, $search_text);
            
            $data['filter_groups']=$this->model_main->get_filter_groups();
            $data['filters']=$this->model_main->get_filters();  


            echo view('admin_product', $data);
        }               
        
        
        public function admin_product()
        {
            
            $this->access();

            $data['category']=$this->model_main->get_category();
            
           
            
            if(!isset($_SESSION['admin_product_filter1']))$_SESSION['admin_product_filter1']=0;
            if(!isset($_SESSION['admin_product_filter2']))$_SESSION['admin_product_filter2']=1;
            if(!isset($_SESSION['admin_product_filter3']))$_SESSION['admin_product_filter3']=1;
            
            $filters['filter1']=$_SESSION['admin_product_filter1'];
            $filters['filter2']=$_SESSION['admin_product_filter2'];
            $filters['filter3']=$_SESSION['admin_product_filter3'];

            
            $data['products']=$this->model_main->get_products_admin($filters);
            
            $data['filter_groups']=$this->model_main->get_filter_groups();
            $data['filters']=$this->model_main->get_filters();  


            echo view('admin_product', $data);
        }    
        
  	public function product_card($id)
	{

            $_SESSION['tmp_quant']=1;
            $data['products']=$this->model_main->get_products($id);
            echo view('product_card', $data);
	}       
        
        public function change_tmp_quant($qhant){
            $_SESSION['tmp_quant']=$qhant;
        }
        
        public function change_product_quant($id, $qhant){
            $_SESSION['products'][$id]=$qhant;
            
            $tmp_price = $this->update_total_price();
            
            echo $tmp_price;
        }    
        
        public function change_check_1($check1){

            $_SESSION['check1']=$check1;

            $tmp_price = $this->update_total_price();
            
            echo $tmp_price;
        }          
        
        public function change_check_2($check2){

            $_SESSION['check2']=$check2;
            
            $tmp_price = $this->update_total_price();
            
            echo $tmp_price;
        }         
        
        
   	public function warranty()
	{
		echo view('warranty');
	} 
         	
        public function filter_add(){
            $request = service('request');
            
            $data['name']= $request->getVar('name');
            $data['group_id']= $request->getVar('group_id');
            
            $this->model_main->filter_add($data);
            
            $this->admin_filter();
        }
        
        
        public function product_add(){
            
            $request = service('request');
            
            
            $data['size']= $request->getVar('size');
            $data['material']= $request->getVar('material');
            $data['country']= $request->getVar('country');    
            
            $data['filters_ids']= $request->getVar('filters_ids');    
            
            $data['name']= $request->getVar('name');
            $data['artikul']= $request->getVar('artikul');
            
            $data['price']= $request->getVar('price');
            $data['descr']= $request->getVar('descr');   
            $data['category']= $request->getVar('category');  
            
            $data['is_mix']= $request->getVar('is_mix');  
            if(!isset($data['is_mix']))
              $data['is_mix']= 0;
                

            $data['image1']= $_FILES["image1"]; 
            $data['image2']= $_FILES["image2"]; 
            $data['image3']= $_FILES["image3"];
            $data['image4']= $_FILES["image4"];
            
            $t_id = $this->model_main->product_add($data);
            

            if(!$data['is_mix'])
                $this->admin_product();
            else
                $this->admin_product_mix();
        }
        
        public function product_mix_add(){
            
            $request = service('request');
            $data['name'] = $request->getVar('name');
            $data['descr'] = $request->getVar('descr');            
            
            $this->model_main->product_mix_add($data);
            
            $this->admin_product_mix();
        }

        
        public function product_add_to_mix($product_id){
            
            $request = service('request');
            $mix_id = $request->getVar('mix_id');            
            $quant = $request->getVar('quant');
            
            $this->model_main->product_add_to_mix($mix_id, $product_id, $quant);
            
            $this->product_edit($product_id);
        }
        
        
        public function product_edit_mix($id){
            $data['category']=$this->model_main->get_category();
            
            $data['product_mix']=$this->model_main->get_product_mix();

            
            $tmp=$this->model_main->get_products($id);
            $data['product']=$tmp[0];
            
            $data['products_filters']=$this->model_main->get_products_filters_one($data['product']);
            $data['filter_groups']=$this->model_main->get_filter_groups();
            $data['filters']=$this->model_main->get_filters();              

            echo view('admin_product_edit_mix', $data);
        }
        
        public function send_filter($send_filter){
            $_SESSION['catalog_filter']=$send_filter;
        }
        
        public function product_edit($id){
            

            
            $data['category']=$this->model_main->get_category();
            

            
            $data['product_mix']=$this->model_main->get_product_mix();
            

            
            $tmp=$this->model_main->get_products($id);
            $data['product']=$tmp[0];
            
            
            
            $data['products_filters']=$this->model_main->get_products_filters_one($data['product']);
            $data['filter_groups']=$this->model_main->get_filter_groups();
            $data['filters']=$this->model_main->get_filters();              

            echo view('admin_product_edit', $data);
        }
        
        public function product_change(){
            
            $request = service('request');

            $data['id']= $request->getVar('id');
            $data['name']= $request->getVar('name');
            $data['price']= $request->getVar('price');
            $data['descr']= $request->getVar('descr');   
            $data['category']= $request->getVar('category');  
            

            $data['artikul']= $request->getVar('artikul'); 
            
            $data['filters_ids']= $request->getVar('filters_ids');   
            
            $data['size']= $request->getVar('size');
            $data['material']= $request->getVar('material');
            $data['country']= $request->getVar('country');              
            
            
            $data['image1']= $_FILES["image1"]; 
            $data['image2']= $_FILES["image2"]; 
            $data['image3']= $_FILES["image3"];
            $data['image4']= $_FILES["image4"];

            
            $is_mix= $request->getVar('is_mix');

            
            $t_id = $this->model_main->product_change($data);
            
            if(!$is_mix)
                $this->admin_product();
            else
                $this->admin_product_mix();
        }     
        
        public function product_mix_product_delete($mix_id, $product_id){
            
            $this->model_main->product_mix_product_delete($mix_id, $product_id);
            $this->admin_product_mix();            
        }
 
        public function product_mix_delete($id){
            
            $this->model_main->product_delete($id);
            
            $this->admin_product_mix();
        } 
        
        public function product_delete($id){
            
            $this->model_main->product_delete($id);
            $this->admin_product();
        } 
        
        
        
        public function chat_delete($parent_id){
            
            $this->model_main->chat_delete($parent_id);
            $this->admin_chat();
        } 
        
        
        public function filter_delete($id){
            
            $this->model_main->filter_delete($id);
            $this->admin_filter();
        }  
        
        public function filters_delete(){
            
            $request = service('request');

            $filters_ids= $request->getVar('filters_ids');             
            
            $this->model_main->filters_delete($filters_ids);
            $this->admin_filter();
        }    
                
        
        
        function search(){
            $request = service('request');
            $search_text = $request->getVar('search_text');
            
            $t_filter=$_SESSION['catalog_filter'];
            $data['products']=$this->model_main->products_search($search_text, $t_filter);

            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
            
            $catalog_ids[]=$id;
            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);

            echo view('search', $data); 
        }        

        public function show_catalog($id){
            
            if(isset($id)&&$id>0)
                $this->kroshki(0, $id);

            
            
            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
            
            
            $catalog_ids[]=$id;
            
            $t_filter=1;
            if(isset($_SESSION['catalog_filter']))
                $t_filter =$_SESSION['catalog_filter'];
            
            
            //$data['products']=$this->model_main->get_products_from_catalogs($catalog_ids);
            $data['products']=$this->model_main->get_products_from_catalogs_with_filters($catalog_ids, $t_filter);

            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);
            
            echo view('catalog', $data);

        }
        
        public function show_menu1(){
            
            $this->kroshki(1);
            
            //echo "kroshki = ".$_SESSION['kroshki']."<br>";
            
            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
            
            $t_filter=1;
            if(isset($_SESSION['catalog_filter']))
                $t_filter =$_SESSION['catalog_filter'];
            
            $catalog_ids=array(21,22,23,24,25);
            $data['products']=$this->model_main->get_products_from_catalogs_with_filters($catalog_ids, $t_filter);
            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);
            

            echo view('catalog', $data);
        }   
        
        public function show_menu2(){
            $this->kroshki(2);
            //echo "kroshki = ".$_SESSION['kroshki']."<br>";
            
            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
           
            $t_filter=1;
            if(isset($_SESSION['catalog_filter']))
                $t_filter =$_SESSION['catalog_filter'];
            
            $catalog_ids=array(26,27,28,29,30,31,32);
            $data['products']=$this->model_main->get_products_from_catalogs_with_filters($catalog_ids, $t_filter);
            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);
            
            echo view('catalog', $data);
        }   
        
        public function show_menu3(){
            $this->kroshki(3);
            
            //echo "kroshki = ".$_SESSION['kroshki']."<br>";
            
            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
           
            $t_filter=1;
            if(isset($_SESSION['catalog_filter']))
                $t_filter =$_SESSION['catalog_filter'];
            
            $catalog_ids=array(33,34,35,36,37,38);
            $data['products']=$this->model_main->get_products_from_catalogs_with_filters($catalog_ids, $t_filter);
            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);
            
            echo view('catalog', $data);
        }   
        
        public function show_menu4(){
            $this->kroshki(4);
            
            //echo "kroshki = ".$_SESSION['kroshki']."<br>";
            
            $data['filter_groups']=$this->model_main->get_filter_groups();//get_category
            
            $t_filter=1;
            if(isset($_SESSION['catalog_filter']))
                $t_filter =$_SESSION['catalog_filter'];
            
            
            $catalog_ids=array(39,40);
            $data['products']=$this->model_main->get_products_from_catalogs_with_filters($catalog_ids, $t_filter);
            $data['products_filters']=$this->model_main->get_products_filters($data['products']);
            $data['filters']=$this->model_main->get_filters_by_ids($data['products_filters']);
            
            echo view('catalog', $data);
        }    
        
        public function admin_product_filter($type){
            
            $this->access();
            
            $request = service('request');
            $filter = $request->getVar('filter');

            
            if($type==1){
                $_SESSION['admin_product_filter1']=$filter;
            }elseif($type==2){
                $_SESSION['admin_product_filter2']=$filter;
            }elseif($type==3){
                $_SESSION['admin_product_filter3']=$filter;
            }
            
            $this->admin_product();
            
        }

        public function admin_decoration_filter($type){
            $this->access();
            
            $request = service('request');
            $filter = $request->getVar('filter');

            
            if($type==1){
                $_SESSION['admin_decoration_filter1']=$filter;
            }
            
            $this->admin_decoration();
            
        }
        
         public function admin_product_mix_filter($type){
             
             $this->access();
             
            $request = service('request');
            $filter = $request->getVar('filter');

            
            if($type==1){
                $_SESSION['admin_product_mix_filter1']=$filter;
            }elseif($type==2){
                $_SESSION['admin_product_mix_filter2']=$filter;
            }elseif($type==3){
                $_SESSION['admin_product_mix_filter3']=$filter;
            }
            
            $this->admin_product_mix();             
         }
         
        public function admin_chat_filter($type){
            $this->access();
            
            $request = service('request');
            $filter = $request->getVar('filter');

            
            if($type==1){
                $_SESSION['admin_chat_filter1']=$filter;
            }
            
            $this->admin_chat();
            
        }   
        
        
        public function admin_order_filter($type){
            $this->access();
            
            $request = service('request');
            $filter = $request->getVar('filter');

            
            if($type==2){
                $_SESSION['admin_order_filter2']=$filter;
            }elseif($type==3){
                $_SESSION['admin_order_filter3']=$filter;
            }
            
            $this->admin_orders();
            
        }         
        
        
        public function login(){
            $request = service('request');
            $pass= $request->getVar('pass');    
            
            if($pass==PASS){
                $_SESSION['login']=1;
            }
                
            if($_SESSION['login']==1){
                $this->admin_product();
            }else{
                $this->login_page();
            }
        }
        
        public function login_page(){

            echo view('login');
        }
        
        public function access(){
            
            if(!isset($_SESSION['login'])){
                $this->login_page();
                exit(0);
            }
                
            if($_SESSION['login']==0){
                $this->login_page();
                exit(0);
            }
            
            return;
        }
        
        public function kroshki($menu, $catalog_id=0){
            
                $link1='<a href="/home/">Главная</a>';
                $link2='<a href="/home/">Товары</a>';
                $link3='';
                
                if($menu){
                    if($menu==1)$link3='<a href="/home/show_menu1">Латексные шары</a>';
                    if($menu==2)$link3='<a href="/home/show_menu2">Фольгированные шары</a>';
                    if($menu==3)$link3='<a href="/home/show_menu3">Товары для праздника</a>';
                    if($menu==4)$link3='<a href="/home/show_menu4">Готовые решения</a>';


                    $_SESSION['kroshki']=$link1.' / '.$link2.' / '.$link3;
                }

                $link4='';
                if($catalog_id){
                    $tmo_catalog_id=$catalog_id;

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
                            $link4='<a href="/home/show_catalog/'.$tmo_catalog_id.'">Хлопушки</a>';
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
        
}
