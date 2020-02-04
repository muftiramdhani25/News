<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class Admindb extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		//$this->load->model();
	}


	public function index()
	{
		$this->load->view('admindb/masteradmin');
    }
    
}
