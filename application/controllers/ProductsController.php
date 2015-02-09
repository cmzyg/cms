<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {

	protected $page_id = 1;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->model('PagesModel');
		$this->load->library('cart');
		$this->load->library('session');
	}

	public function index($id = 1)
	{
		$data['products'] = $this->PagesModel->get_products();

	    $this->load->view('layout/header', $data);
	    $this->load->view('layout/content', $data);
	    $this->load->view('layout/footer');
	}




}
