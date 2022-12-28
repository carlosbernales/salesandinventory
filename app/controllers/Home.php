<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Home extends Controller {

    public function __construct() {
		parent::__construct();
		$this->call->model('Product_model');
	}
	public function index()
    {
        $this->call->view('template/login');
    }
    public function login()
    {	
		$user = $this->io->post('user');  
        $pass = $this->io->post('pass');  
        if ($user=='admin' && $pass=='admin')   
        {  
            //declaring session  
            $this->session->set_userdata(array('user'=>$user));  
            redirect('index.php/home/dashboard');
        }  
        else{  
            redirect('index.php/home/index');
			echo "<script>alert('Registered successfully')</script>";
        }  
    }  
    // <---------------- CRUD CONTROLLER ------------> //

    public function add_product()
	{
		if($this->form_validation->submitted())
		{
			$this->form_validation
				->name('product')->required()
                ->name('price')->required()
                ->name('quantity')->required()
                ->name('description')->required();

			if($this->form_validation->run()) {
				if($this->Product_model->addProduct($this->io->post('product'),
					$this->io->post('price'),
					$this->io->post('quantity'),
					$this->io->post('description')))
					//echo '<script>alert("Registered successfully")</script>';
					redirect('index.php/home/products');
				} 
				else {
					echo 'ERROR';
				}
		}
		$this->call->view('products/addproduct');
	}  

   // Function for Edit or Update of Records //
	public function update_product() {
		if($this->form_validation->submitted())
		{
			$this->form_validation
				->name('product')->required()
                ->name('price')->required()
                ->name('quantity')->required()
                ->name('description')->required();

			if($this->form_validation->run()) {
				if($this->Product_model->up_product($this->io->post('id'),
					$this->io->post('product'),
					$this->io->post('price'),
					$this->io->post('quantity'),
					$this->io->post('description')))
					redirect('index.php/home/products');
			}
		}
	}
	public function delete_product($id) {
		if($this->Product_model->remove_product($id))
		
			redirect('index.php/home/products');
			exit;
	}

	// Function for getting Edit or Update of Records //
	public function update($id) {
		$data = $this->Product_model->getProduct($id);
		$this->call->view('products/editproduct', $data);
	}

    // <---------------- VIEW PAGES ------------> //
	public function dashboard() {
		$this->call->view('template/index');
	}

    public function products() {
        $data = $this->Product_model->retrieve_product();
		$this->call->view('products/product', $data);
	}

    public function stocks() {
        $this->call->view('stocks/stocks');
     }
     
    public function sales() {
        $this->call->view('sales/sales');
     }
     
    public function salesreport() {
        $this->call->view('sales/salesreport');
     }
     // <---------------- VIEW PAGES ------------> //

}
?>