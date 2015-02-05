<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('WelcomeModel');
		$this->load->helper('url');
	}


	public function index()
	{
		$data['page_info'] = $this->WelcomeModel->get_page(1);  
		$this->load->view('layout/header', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer');
	}

}
