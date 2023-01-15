<?php
    class Salesrep_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
    public function retrieve_sales() {
		return $this->db->table('sales')->get_all();
    }
}
        
?>