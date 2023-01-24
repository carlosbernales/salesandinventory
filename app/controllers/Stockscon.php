<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Stockscon extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Stocks_model');
	}
	public function add_stock() {
		if($this->form_validation->submitted())
		{
			$this->form_validation->name('quantity')->required();
			if($this->form_validation->run()) {
				if($this->Stocks_model->up_stock($this->io->post('id'),
					$this->io->post('quantity')))
					$_SESSION['status']="New Stocks Added";
					$_SESSION['status_code']="success";
					redirect('index.php/stockscon/stock_up');
			}
		}
	}
	public function stock_up() {
        $data = $this->Stocks_model->retrieve_stocks();
		$this->call->view('stocks/stocks', $data);
	} 
	public function addstock($id) {
		$data = $this->Stocks_model->stock_up($id);
		$this->call->view('stocks/addstock', $data);
	}

	public function reducestock_up() {
		if($this->form_validation->submitted())
		{
			$this->form_validation
                ->name('quantity')->required();

			if($this->form_validation->run()) {
				if($this->Stocks_model->reduce_stock($this->io->post('id'),
					$this->io->post('quantity')))
					$_SESSION['status']="Some Stocks Removed";
					$_SESSION['status_code']="success";
					
					redirect('index.php/stockscon/stock_up');
			}
		}
	}
	public function reducestock($id) {
		$data = $this->Stocks_model->stock_up($id);
		$this->call->view('stocks/reducestock', $data);
	}
}
?>