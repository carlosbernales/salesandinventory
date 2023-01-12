<?php
    class Product_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
        // Query for Retrieve of Data //
    public function retrieve_product() {
		return $this->db->table('product')->get_all();
	}
        // Query for Insert of Data //
    public function addProduct($product,$price, $quantity, $cat_name){
            $data = array(
            'product'=>$product,
            'price' =>$price,
            'quantity'=>$quantity,
            'cat_name'=>$cat_name
        );

        $result=$this->db->table('product')->insert($data);
        if($result){
            return true;
        }
    }
        // Query for Delete of Data //
    public function remove_product($id) {
		$result = $this->db->table('product')
                ->where(array('id' => $id))
                ->delete();
        if($result)
        return true;
	}

        // Query for Update of Data //
     public function up_product($id, $product, $price) {

        $data = array(
            'product' => $product,
            'price' => $price,
        );

		$result = $this->db->table('product')
                ->where(array('id' => $id))
                ->update($data);
                
        if($result)
        return true;
	}
 

     // Query for getting data to be Edit or Update //
     public function getProduct($id) {
        return $this->db->table('product')
                ->where('id', $id)
                ->get();
    }
}
        
?>