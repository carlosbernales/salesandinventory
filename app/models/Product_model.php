<?php
    class Product_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }

    public function count_cat(){
       return $this->db->table('category')->select_count('id', 'category_name')->get();
    }

    public function count_prod(){
       return $this->db->table('product')->select_count('id', 'product')->get();
    }
    public function count_sales(){
        return $this->db->table('sales')->select_count('id', 'caty_name')->get();
     }
     public function count_earning(){
        return $this->db->table('sales')->select_sum('s_total', 'total_earning')->get();
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
 
     public function getProduct($id) {
        return $this->db->table('product')
                ->where('id', $id)
                ->get();
    }
}
        
?>