<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class Admin extends CI_Model {


	public function getAdmin($email, $password)
	{

        
         return $this->db->get_where('admin', ['email' => $email, 'password' => md5($password)])->row();

	}

	
}
