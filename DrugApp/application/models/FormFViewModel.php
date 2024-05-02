<?php
class FormFViewModel extends CI_Model{

    public function index(){

        $query = $this->db->get('form5');
        return $query->result();

       
    }
}

?>