<?php 

class Login extends CI_Controller{
    public function __construct()
    {
        parent:: __construct();
        $this->load->model('mlogin');
    }
    public function index() 
    {
        $this->load->view('viewlogin');
    }

    public function proseslogin() 
    {
        $user = $this->input->post('username');
        $pass = $this->input->post('password');
        $this->mlogin->proseslogin($user, $pass);
    }

    public function logout()
    {
        $this->session->sess_destroy();
        redirect('login');
    }
}