<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	function __construct()
	{
		parent::__construct();
		$this->load->model('WelcomeModel');
	}


	public function index()
	{
		$data['welcome_message'] = 'Hi Zygis!';
		$data['encoded_message'] = $this->WelcomeModel->get_name();   
		$this->load->view('layout/header');
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer');
	}
}
