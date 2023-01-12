<?php
    class Productcat_model extends Model{

    public function __constructor()
    {
        parent::constructor();
        $this->function->database();
    }
    public function addCategory($categoryname){
        $data = array(
        'category_name'=>$categoryname,
    );

    $result=$this->db->table('category')->insert($data);
    if($result){
        return true;
        }
    }

    public function retrieve_category() {

		return $this->db->table('category')->get_all();
	}
}

?>