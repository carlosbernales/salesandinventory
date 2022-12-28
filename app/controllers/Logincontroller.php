<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Logincontroller extends Controller {

    public function index()
    {
        $this->call->view('template/login');
    }
    public function login()
    {	
		$email=$this->io->post('email');
		$password=$this->io->post('password');

		$result = $this->User_model->loginUser($_POST['password'],$_POST['email']);

        if($result){
			echo "<script>alert('Login Success')</script>";
			redirect('user/show');
			// $this->call->view('users/show');
		} else {
			echo "<script>alert('Invalid Username and Password')</script>";
			$this->call->view('users/login');
		}
	}
}
?>
