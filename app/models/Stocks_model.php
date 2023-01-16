<?php
    class Stocks_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
    public function up_stock($id, $quantity) {

        $data = array('quantity' => $quantity,);
		$result = $this->db->table('product')
                ->where(array('id' => $id))
                ->update($data);
                
        if($result)
        return true;
	}
        // Query for Retrieve of Data //
    public function retrieve_stocks() {
		return $this->db->table('product')->get_all();
    }
    public function stock_up($id) {
        return $this->db->table('product')
                ->where('id', $id)
                ->get();
    }
    public function reduce_stock($id, $quantity) {

        $data = array(
            'quantity' => $quantity,
        );

		$result = $this->db->table('product')
                ->where(array('id' => $id))
                ->update($data);
                
        if($result)
        return true;
	}
}
        
?>