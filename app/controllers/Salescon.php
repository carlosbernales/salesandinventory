<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Salescon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Product_model');
	}
	public function index() {
		$this->call->view('sales/sales');
	}
	public function index1() {
		$this->call->view('salesreport/salesreport');
	}
}
?>