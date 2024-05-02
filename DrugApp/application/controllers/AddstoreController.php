<?php
class AddstoreController extends CI_Controller
{

    public function __construct()
    {
        parent::__construct();
        $this->load->model('StoreModel');

    }

    public function index()
    {

        
        // $this->load->model('StoreModel');
        $this->load->model('StoreModel');
        $storedata['getstore'] = $this->StoreModel->getall();
        $this->load->view('Addstore',$storedata);
       
    }
    public function uploaddata(){
        $this->form_validation->set_rules('storename', 'Storename', 'required|trim');
        $this->form_validation->set_rules('ownername', 'Ownername', 'required|trim');
        $this->form_validation->set_rules('address', 'Address', 'required|trim');
        $this->form_validation->set_rules('drugs', 'Drugs', 'required|trim');
        $this->form_validation->set_rules('drugsname', 'Drugsname', 'required|trim');
        $this->form_validation->set_rules('reg', 'Reg', 'required|trim');

        if ($this->form_validation->run() == false) {
            $this->load->view('Addstore');
        } else {

            $store = $this->input->post('storename');
            $owner = $this->input->post('ownername');
            $addr = $this->input->post('address');
            $drgs = $this->input->post('drugs');
            $drgsname = $this->input->post('drugsname');
            $registeration = $this->input->post('reg');

            // $this->load->model('StoreModel');
            $shop = $this->StoreModel->index($store, $owner, $addr, $drgs, $drgsname, $registeration);

            if ($shop) {
                $this->session->set_flashdata('success', 'shop data upload successfully');
                // $this->load->view('Addstore');
                redirect('AddstoreController','Addstore');
            } else {
                $this->session->set_flashdata('error', 'shop data failed to upload');
            }

           
        }

    }


    function edit($id){

        $this->load->model('EditModel');
        $data['user']= $this->EditModel->getuser($id);
        $data['id'] = $id;

        if($_SERVER['REQUEST_METHOD'] == 'POST'){
            $username = $this->input->post('storename');
            $useradress = $this->input->post('address');
            $owner = $this->input->post('ownername');
            $drugs = $this->input->post('drugs');

            $data = array(
                'storename'=>$username,
                'ownername'=>$owner,
                'address'=>$useradress,
                'drugs'=>$drugs

            );

            $status = $this->EditModel->updateuser($data,$id);
            if($status == true){
                $this->session->set_flashdata('success', 'update success');
                $this->load->view('Editview');
            }else{
                $this->session->set_flashdata('error', 'update unsuccess');
                $this->load->view('Editview');
            }
        }
        $this->load->view('Editview',$data);
    }

}
