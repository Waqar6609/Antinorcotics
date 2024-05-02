<?php
class DeleteModel extends CI_Model{

    public function index($shop_id){

        $this->db->where('id',$shop_id);
        $this->db->delete('store');

        if($this->db->affected_rows() > 0){
            return true;
        }else{
            return false;
        }

    }
}
?>