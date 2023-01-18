<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class Count extends Controller {
    public function __construct() {
		parent::__construct();
		$this->call->model('Product_model');
	}
}