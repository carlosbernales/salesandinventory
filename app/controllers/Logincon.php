<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Logincon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Product_model');
	}
	public function index() {
		$this->call->view('login');
	}
    public function dashboard()
    {
        $data['category_name']=$this->Product_model->count_cat();
        $data['product']=$this->Product_model->count_prod();
        $data['caty_name']=$this->Product_model->count_sales();
        $data['total_earning']=$this->Product_model->count_earning();
        
        $this->call->view('dashboard', $data);
    }
    public function login()
    {	
		$user = $this->io->post('user');  
        $pass = $this->io->post('pass');  
        if ($user=='admin' && $pass=='admin')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user)); 
            $_SESSION['status']="Welcome Back Admin";
            redirect('index.php/Logincon/dashboard');
        }  
        else{  
            $_SESSION['status']="Wrong Credentials";
            $_SESSION['status_code']="error";
            redirect('index.php/Logincon/index');
        }  
    }  

    public function logout(){
        $this->session->sess_regenerate_destroy();
        $this->call->view('login');
        
    }
}
?>