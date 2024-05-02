<?php

class DashboardController extends CI_Controller{
    public function index(){

        $this->load->model('AdduserModel');
        $allusers['All'] =  $this->AdduserModel->getusers();
        $this->load->view('Dashboard' , $allusers);
        
    }

    function logout(){

        $this->session->sess_destroy();
        redirect('SigninController');
    }
}

?>