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
	}

    public function view($page = 'home')
    {
	    $data['page_info'] = $this->PagesModel->get_page($page);

	    if($data['page_info'] == NULL)
	    {
	    	show_404();
	    }

	    $data['slider'] = $this->PagesModel->get_slider();

        // add +1 to views
	    $this->PagesModel->increment_view_count($page);

	    $this->load->view('layout/header', $data);
	    $this->load->view('layout/content', $data);
	    $this->load->view('layout/footer');
    }



}
