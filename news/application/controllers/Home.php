<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class Home extends CI_Controller {

	function __construct(){
		parent::__construct();
		$this->load->model('News');
	}


	public function index()
	{
		$data = [
			'content' => 'home' // home adalah file view home
		];
		$this->load->view('master', $data);
	}

	public function about(){
		$data = [
			'content' => 'about' // about adalah file view home
		];
		$this->load->view('master', $data);
	}

	public function getAdmin(){
		//print_r($this->News->getAdmin());
		$this->pre($this->News->getAdmin());
	}

	public function pre($array = null) // = null error handling
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}
