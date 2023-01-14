<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Productcatcon extends Controller {

    public function __construct() {

		parent::__construct();
		$this->call->model('Productcat_model');
    }
  
    public function add_category() {

      $this->call->view('productcategory/addcategory');
    }
    public function addcategory()
	  {
		if($this->form_validation->submitted())
		{
			$this->form_validation
				->name('category')->required();
			if($this->form_validation->run()) {
				if($this->Productcat_model->addCategory
          ($this->io->post('category')))

					redirect('index.php/productcatcon/category_up');
				} 
				else {
					echo 'ERROR';
				}
		}
		$this->call->view('productat/addcategory');
	} 

	public function category_up() {

        $data = $this->Productcat_model->retrieve_category();
		$this->call->view('productcategory/productcat', $data);
	} 
	
    

}
?>