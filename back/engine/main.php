<?php

class Main extends Controller {

	
	function Main(){
		parent::Controller();	
		$this->load->helper('url');
		$this->load->model('model_main','m_main');
		$this->load->library('session');
		$this->load->helper('cookie');
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
    
    
    public function add_decoration_order(){
        
        $data['ip']=$this->get_ip();
        
        $data['name']=$this->input->post('name');
        $data['title']=$this->input->post('phone');
        $data['pquant']=$this->input->post('descr');
  
        $this->model_main->add_decoration_order($data);
        
        
        $this->index();
    }
    
	
	public function index()
	{
		$this->load->view('main_page');
	}
        
 	public function development()
	{
		$this->load->view('development');
	}         
        
	public function contacts()
	{
		$this->load->view('contacts');
	}  
        
	public function filters()
	{
		$this->load->view('filters');
	}  
        
 	public function faq()
	{
		$this->load->view('faq');
	}           
        
 	public function checkout()
	{
		$this->load->view('checkout');
	}  
        
 	public function cart()
	{
		$this->load->view('cart');
	}    
        
  	public function delivery_payment()
	{
		$this->load->view('delivery_payment');
	}        
        
        public function adminka()
        {
            	$this->load->view('adminka');
        }
        
        public function admin_product()
        {
            	$this->load->view('admin_product');
        }    
        
  	public function product_card()
	{
		$this->load->view('product_card');
	}         
        
   	public function warranty()
	{
		$this->load->view('warranty');
	} 		
}