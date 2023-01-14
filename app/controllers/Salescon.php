<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Salescon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Sales_model');
	}
	public function addsales() {

		$data = $this->Sales_model->retrieve_data();
		$this->call->view('sales/addsales',$data);
	}

	public function addsalesdata($id) {

		$data = $this->Sales_model->addsales($id);
		$this->call->view('sales/addsalesform', $data);
	}

	public function add_sales()
	{
	  if($this->form_validation->submitted())
	  {
		  $this->form_validation
			  ->name('caty_name')->required()
			  ->name('s_product')->required()
			  ->name('s_price')->required()
			  ->name('s_quantity')->required()
			  ->name('s_total')->required()
			  ->name('quantity')->required()
			  ->name('s_created_at')->required();
		  if($this->form_validation->run()) {
			  if($this->Sales_model->insert_sales($this->io->post('caty_name'),
					$this->io->post('s_product'),
					$this->io->post('s_price'),
					$this->io->post('s_quantity'),
					$this->io->post('s_total'),
					$this->io->post('s_created_at'),
					$this->io->post('id'),
					$this->io->post('quantity')))
					$_SESSION['status']="New Sales Added";
					$_SESSION['status_code']="success";

				  redirect('index.php/salescon/addsales');
			  } 
			  else {
				  echo 'ERROR';
			  }
	  }
	  $this->call->view('productat/addcategory');
  	}
	public function retrievesales() {

        $data = $this->Sales_model->retrieve_sales();
		$this->call->view('sales/sales', $data);
	} 
	
}
?>