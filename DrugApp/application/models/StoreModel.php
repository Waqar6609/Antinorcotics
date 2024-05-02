<?php
class StoreModel extends CI_Model
{

    public function index($store, $owner, $addr, $drgs, $drgsname, $registeration)
    {

        $data = array(
            'storename' => $store,
            'ownername' => $owner,
            'address' => $addr,
            'drugs' => $drgs,
            'reg' => $registeration
        );

        return $this->db->insert('store', $data);
    }

    public function getall()
    {

        $query = $this->db->get('store');
        // return $query->result();
        // print_r($query->result());
        $result = $query->result();

        // Debugging: Print the result
        // var_dump($result);

        return $result;
    }
}
