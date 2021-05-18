<?php
defined('BASEPATH') OR exit('No direct script access allowed');
class Login extends CI_Controller {

    function __construct() 
    {
        parent::__construct();
        if ($this->session->userdata('user')){
            redirect('dashboard');
        }
    }

    public function index()
	{
        $this->load->view('dashboard/v_login');

    }

    public function auth() 
    {
        if ($this->input->post()) {
            $username = $this->input->post('username');
            $password = md5($this->input->post('password'));
            $this->load->model('m_login');
            $result = $this->m_login->get_data($username,$password);
            if ($result != null) {
                $this->session->set_userdata('user',$result[0]);
                $this->output->set_content_type("application/json")->set_output(json_encode(array('status'=>true, 'msg'=>'')));
            } else {
                $this->output->set_content_type("application/json")->set_output(json_encode(array('status'=>false, 'msg'=>'Username atau Password Salah')));
            }
        }else{
            redirect('login');
        }
    }
}