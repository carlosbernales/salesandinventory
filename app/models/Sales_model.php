<?php
    class Sales_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
        // Query for Retrieve of Data //
    public function retrieve_data() {
		return $this->db->table('product')->get_all();
    }
    public function addsales($id) {
        return $this->db->table('product')
                ->where('id', $id)
                ->get();
    }
    public function insert_sales($caty_name, $s_product, $s_price, $s_quantity, $s_total,$s_created_at, $id, $quantity){
        $data = array(
            'caty_name'=>$caty_name,
            's_product'=>$s_product,
            's_price'=>$s_price,
            's_quantity'=>$s_quantity,
            's_total'=>$s_total,
            's_created_at'=>$s_created_at,
        );
        $datas =array(
            'quantity' => $quantity,
        );
        $result=$this->db->table('sales')->insert($data);
        $result = $this->db->table('product')
            ->where(array('id' => $id))
            ->update($datas);
        if($result){
            return true;
        }
    }
   

}
        
?>