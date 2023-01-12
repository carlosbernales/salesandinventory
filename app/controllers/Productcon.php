<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Productcon extends Controller {
    public function __construct() {

		parent::__construct();
		$this->call->model('Product_model');
		$this->call->model('Productcat_model');
	}

	public function add_product()
	{
		if($this->form_validation->submitted())
		{
			$this->form_validation
				->name('product')->required()
                ->name('price')->required()
				->name('quantity')->required()
				->name('cat_name')->required();

			if($this->form_validation->run()) {
				if($this->Product_model->addProduct($this->io->post('product'),
					$this->io->post('price'),
					$this->io->post('quantity'),
					$this->io->post('cat_name')))
					redirect('index.php/productcon/product_up');
				} 
				else {
					echo 'ERROR';
				}
		}
		$this->call->view('product/addproduct');
	} 

	public function product_up() {
        $data = $this->Product_model->retrieve_product();
		$this->call->view('product/products', $data);
	} 
	public function update($id) {
		
		$data = $this->Product_model->getProduct($id);
		$this->call->view('product/editproduct', $data);
	}

	public function update_product() {
		if($this->form_validation->submitted())
		{
			$this->form_validation
				->name('product')->required()
                ->name('price')->required();

			if($this->form_validation->run()) {
				if($this->Product_model->up_product($this->io->post('id'),
					$this->io->post('product'),
					$this->io->post('price')))
					redirect('index.php/productcon/product_up');
			}
		}
		
	}
	public function delete_product($id) {

		if($this->Product_model->remove_product($id))
		
			redirect('index.php/productcon/product_up');
			exit;
	}

	public function addproduct() {
		$data = $this->Productcat_model->retrieve_category();
		$this->call->view('product/addproduct', $data);
	} 

}
?>