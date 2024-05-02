<?php
class AdduserModel extends CI_Model
{

    public function index($newuser, $useremail, $userpassw)
    {

        $data = array(
            'newuser' => $newuser,
            'newemail' => $useremail,
            'newpassword' => $userpassw
        );

        return $this->db->insert('adduser', $data);
    }

    public function getusers()
    {       
        $query = $this->db->query('SELECT * FROM `adduser`');
        
        return $query->result();

        // print_r($query->result());
    }
}
