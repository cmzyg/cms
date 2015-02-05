<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {

	protected $page_id = 1;

	function __construct()
	{
		parent::__construct();
		$this->load->model('WelcomeModel');
		$this->load->helper('url');
	}


    /* this is the main method of the homepage controller
    *  loads up the model which looks into the database
    *  and then stores found values in variables, then
    *  passes thoses values to view
    *  @return mixed 
    */

	public function index()
	{
		$data['page_info'] = $this->WelcomeModel->get_page($this->page_id);

		if($data['page_info']['page_status'] == 'inactive')
		{
			log_message('debug', 'Some variable did not contain a value.');
			show_404();
			exit;
		}

		$this->load->view('layout/header', $data);
		$this->load->view('welcome_message', $data);
		$this->load->view('layout/footer');
	}

}
