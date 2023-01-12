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
        $this->call->view('dashboard');
    }
    public function login()
    {	
		$user = $this->io->post('user');  
        $pass = $this->io->post('pass');  
        if ($user=='admin' && $pass=='admin')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            redirect('index.php/Logincon/dashboard');
        }  
        else{  
			$this->session->set_flashdata(array('alert' => 'danger', 'message' => 'Wrong username or password.'));
            redirect('index.php/Logincon/index');
        }  
    }  
}
?>