<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Stockscon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Stocks_model');
	}
	public function stock_up() {
        $data = $this->Stocks_model->retrieve_stocks();
		$this->call->view('stocks/stocks', $data);
	} 
}
?>