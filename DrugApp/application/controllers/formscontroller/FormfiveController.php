<?php
class FormfiveController extends CI_Controller{

    public function __construct()
    {
        parent::__construct();

        $this->load->library('session');
        $this->load->library('form_validation');
    }

    public function index(){

        $this->load->view('forms/form5');
    }

    public function formfivedata(){

        if($_SERVER['REQUEST_METHOD'] == 'POST'){

            $this->form_validation->set_rules('store','Store','trim|required');
            $this->form_validation->set_rules('storeowner','Storeowner','trim|required');
            $this->form_validation->set_rules('storeaddress','Storeaddress','trim|required');
            $this->form_validation->set_rules('drugname','Drugname','trim|required');
            $this->form_validation->set_rules('manufacture','Manufacture','trim|required');
            $this->form_validation->set_rules('reg','Reg','trim|required');
            $this->form_validation->set_rules('batch','Batch','trim|required');
            $this->form_validation->set_rules('qty','Qty','trim|required');

            if($this->form_validation->run() == false){
                // redirect('formscontroller/FormfiveController');
                $this->load->view('forms/form5');
            }else{
                $storename = $this->input->post('store');
                $owner = $this->input->post('storeowner');
                $address = $this->input->post('storeaddress');
                $drug = $this->input->post('drugname');
                $manufactr = $this->input->post('manufacture');
                $registeration = $this->input->post('reg');
                $btch = $this->input->post('batch');
                $quantity = $this->input->post('qty');

                $this->load->model('FormFModel');

                $form5result = $this->FormFModel->index($storename,$owner,$address,$drug,$manufactr,$registeration,$btch,$quantity);

                if($form5result){

                    // redirect('formscontroller/FormfiveController');
                    $this->load->view('forms/form5');
                    $this->session->set_flashdata('success','Form data Uploaded successfully');
                }else{
                    // redirect('formscontroller/FormfiveController');
                    $this->load->view('forms/form5');
                    $this->session->set_flashdata('error','Form data Uploaded unsuccessfully');

                }

                
            }



        }
    }
}

?>