<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class Auth extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		$this->load->model('Admin');
	}


	public function index()
	{
		$this->load->view('login');
    }
    
    public function login()
	{
        $inputEmail = $this->input->post('email');
        $inputPassword = $this->input->post('password');

        $check = $this->Admin->getAdmin($inputEmail, $inputPassword);

        if($check){
            //store data to the sessions
            $this->session->set_userdata([
                'admin_id' => $check->id,
                'name' => $check->name,
                'level' => $check->level,
                'is_login' => TRUE
            ]);
            return redirect('administrator');
        } else {
            $this->session->set_flashdata('error' , 'Email atau password salah');
            redirect('auth');
        }
    }
    
    public function logout()
    {
        $this->session->unset_userdata(['is_login', 'level', 'name', 'admin_id']);
        redirect('auth');
    }

	public function pre($array = null) // = null error handling
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}
