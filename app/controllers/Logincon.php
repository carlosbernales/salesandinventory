<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Logincon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Product_model');
        $this->call->library('auth');
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
    // public function login()
    // {	
	// 	$user = $this->io->post('user');  
    //     $pass = $this->io->post('pass');  
    //     if ($user=='admin' && $pass=='admin')   
    //     {  
    //         //declaring session  
    //         $this->session->set_userdata(array('user'=>$user)); 
    //         $_SESSION['status']="Welcome Back Admin";
    //         redirect('index.php/Logincon/dashboard');
    //     }  
    //     else{  
    //         $_SESSION['status']="Wrong Credentials";
    //         $_SESSION['status_code']="error";
    //         redirect('index.php/Logincon/index');
    //     }  
    // }  

    // public function logout(){
    //     $this->session->sess_regenerate_destroy(array('user'=>$user));
    //     $this->call->view('login');
        
    // }

    public function register()
    {
        $this->auth->register('admin', 'admin@gmail.com', 'admin123');
    }


    public function login()
    {
        if($this->form_validation->submitted()) 
        {
            $this->form_validation
                ->name('username')->required()
                ->name('password')->required();

            $username = $this->io->post('username');
            $password = $this->io->post('password');

            $data = $this->auth->login($username, $password);

            if(!$data)
            {
                $_SESSION['status']="Incorrect username or password";
                $_SESSION['status_code']="error";
            } else {
                $this->auth->set_logged_in($data);
                $_SESSION['status'] = "Hello Admin";  
                redirect('index.php/Logincon/dashboard');              
            }
        }
        redirect('index');
    }

    public function logout()
    {
        $this->auth->set_logged_out();
        redirect('index');
    }
}
?>