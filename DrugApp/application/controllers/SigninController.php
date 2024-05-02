<?php
class SigninController extends CI_Controller
{

    public function index()
    {

        $this->load->view('Signin');
    }

    public function loginprocess()
    {

        $this->form_validation->set_rules('email', 'Email', 'trim|required');
        $this->form_validation->set_rules('password', 'Password', 'trim|required');
        $this->form_validation->set_rules('usertype','Usertype','trim|required');

        if ($this->form_validation->run() == false) {
            $this->load->view('Signin');
        } else {

            $adminname = $this->input->post('email');
            $adminpassw = $this->input->post('password');
            $admintype = $this->input->post('usertype');


            $this->load->model('SigninModel');
            $this->load->model('UserModel');
            $user = $this->SigninModel->loginmodel($adminname, $adminpassw,$admintype);
            $user2 = $this->UserModel->index($adminname, $adminpassw,$admintype);

            if ($user) {

                $userdata = array(
                    'email' => $user->email,
                    'password' => $user->password
                );
                $this->session->set_userdata($userdata);
                redirect('DashboardController');
            }
            else {
                $data['error'] = "Invalid username or password";
                $this->load->view('Signin',$data);
            }
        }
    }
}

?>
