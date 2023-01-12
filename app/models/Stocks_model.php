<?php
    class Stocks_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
        // Query for Retrieve of Data //
    public function retrieve_stocks() {
		return $this->db->table('product')->get_all();
    }

}
        
?>