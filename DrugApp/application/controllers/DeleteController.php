<?php
class DeleteController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('DeleteModel');
        $this->load->model('StoreModel'); 
    }

    public function index($shop_id){

        $status = $this->DeleteModel->index($shop_id);

        if($status == true){
            $this->session->set_flashdata('success','shop record delete duccess');
            // $this->load->view('Addstore');
        }else{
            $this->session->set_flashdata('error','shop record delete unsuccess');
            // $this->load->view('Addstore');
        }

        $storedata['getstore'] = $this->StoreModel->getall();
        $this->load->view('Addstore', $storedata);




    }
}
?>