<?php
class AdduserController extends CI_Controller {

    public function __construct()
    {
        parent::__construct();

        $this->load->model('AdduserModel');
    }

    // public function index() {

       

       
        
    // }

    function NewAdmin(){

         // Check if the request method is POST
         if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            // Load form validation library
            $this->load->library('form_validation');

            // Set form validation rules
            $this->form_validation->set_rules('newname', 'Newname', 'required|trim');
            $this->form_validation->set_rules('newemail', 'Newemail', 'required|trim');
            $this->form_validation->set_rules('newpassw', 'Newpassw', 'required|trim');

            // Run form validation
            if ($this->form_validation->run() == false) {
                // Validation failed, load the Dashboard view
                // $this->load->view('Dashboard','refresh');
                redirect('DashboardController', 'refresh');
            } else {
                // Form validation passed, process the form data
                $newuser = $this->input->post('newname');
                $useremail = $this->input->post('newemail');
                $userpassw = $this->input->post('newpassw');

                // Load the AdduserModel
                $this->load->model('AdduserModel');

                // Call the model method to add user
                $result = $this->AdduserModel->index($newuser, $useremail, $userpassw);

                if ($result) {
                    // Data inserted successfully
                    redirect('DashboardController', 'refresh'); // Redirect to DashboardController
                } else {
                    // Data insertion failed
                    redirect('DashboardController', 'refresh');
                }
            }
        }



    }
}
