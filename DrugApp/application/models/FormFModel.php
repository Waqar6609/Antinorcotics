<?php
class FormFModel extends CI_Model{

    public function index($storename,$owner,$address,$drug,$manufactr,$registeration,$btch,$quantity){

        $data = array(
            'store_name'=>$storename,
            'store_owner'=>$owner,
            'store_address'=>$address,
            'drugs_name'=>$drug,
            'manufacturer'=>$manufactr,
            'registeration'=>$registeration,
            'batch'=>$btch,
            'quantity'=>$quantity
        );

        return $this->db->insert('form5' ,$data);

    }
}
?>