<?php
class UserModel extends CI_Model{

    public function index($adminname, $adminpassw,$admintype){

        $query = $this->db->get_where('adduser', array('newemail'=>$adminname,'newpassword'=>$adminpassw,'user_type'=>$admintype));
        return $query->row();
    }
}

?>