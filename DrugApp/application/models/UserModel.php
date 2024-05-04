<?php
class UserModel extends CI_Model{

    public function index($adminname, $adminpassw){

        $query = $this->db->get_where('adduser', array('newemail'=>$adminname,'newpassword'=>$adminpassw));
        return $query->row();
    }
}

?>