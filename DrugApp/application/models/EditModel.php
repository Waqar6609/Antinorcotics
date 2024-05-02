<?php 
class EditModel extends CI_Model{

    public function getuser($id){

        $this->db->where('id',$id);
        $query = $this->db->get('store');
        return $query->row();
    }

    function updateuser($data,$id){

        $this->db->where('id',$id);
        $this->db->update('store',$data);

        if($this->db->affected_rows() >= 0){

            return true;
        }else{
            return false;
        }
    }
}
?>