<?php
class SigninModel extends CI_Model{

    public function loginmodel($adminname,$adminpassw){

        $query = $this->db->get_where('druglogin', array('email'=>$adminname,'password'=>$adminpassw));
        return $query->row();

    }
}
?>