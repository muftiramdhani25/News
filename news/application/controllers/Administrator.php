<?php
defined('BASEPATH') OR exit('No direct script access allowed'); // security

class Administrator extends CI_Controller {

    function __construct()
    {
		parent::__construct();
		$this->load->model(['Admin', 'News']);

		//security handler
		$this->session->userdata('is_login') ? '' : redirect('auth');
	}


	public function index()
	{
		$data = [
			'content' => 'admin/dashboard'
		];
		$this->load->view('master', $data);
	}
	
	public function news(){
		$data = [
			'content' => 'admin/news',
			'news' => $this->News->getNews()
		];

		$this->load->view('master', $data);
	}

	public function input_news(){
		$data = [
			'content' => 'admin/input_news'
		];
		$this->load->view('master', $data);
	}

	public function store_news(){
		//$this->pre($_POST); //testing
		$data = [
			'admin_id' => $this->session->userdata('admin_id'),
			'slug' => str_replace(' ','-',$this->input->post('title')),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'image' => $this->input->post('image'),
			'status' => '1'
		];

		$this->News->storeNews($data);

		redirect('administrator/news');
	}

	public function delete_news(){
		$id = $this->input->get('id');
		$this->News->deleteNews($id);

		redirect('administrator/news');
	}

	public function edit_news(){
		$id = $this->input->get('id');
		$data = [
			'content' => 'admin/edit_news',
			'news' => $this->News->getNews($id)
		];

		$this->load->view('master', $data);
	}

	public function update_news(){
		$id = $this->input->post('id');

		$data = [
			'admin_id' => $this->session->userdata('admin_id'),
			'slug' => str_replace(' ','-',$this->input->post('title')),
			'title' => $this->input->post('title'),
			'content' => $this->input->post('content'),
			'image' => $this->input->post('image'),
			'status' => '1'
		];

		$this->News->updateNews($id, $data);
		redirect('administrator/news');
	}

	public function pre($array = null) // = null error handling
	{
		echo "<pre>";
		print_r($array);
		echo "</pre>";
	}
}
