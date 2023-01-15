<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Salesrepcon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Salesrep_model');
	}
	public function retrievesales() {

        $data = $this->Salesrep_model->retrieve_sales();
		$this->call->view('salesreport/salesreport', $data);
	} 
	
}
?>