<?php
class FormReportController extends CI_Controller{

    public function index(){

        $this->load->view('formreport/form5report');
    }

    public function getdata(){

        $this->load->model('FormFViewModel');
        $allreport['report'] = $this->FormFViewModel->index();
        $this->load->view('formreport/form5report',$allreport);
    }
}
?>