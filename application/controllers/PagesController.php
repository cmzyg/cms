<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesController extends CI_Controller {

	protected $page_id = 1;

	function __construct()
	{
		parent::__construct();
		$this->load->helper('url');
		$this->load->helper('file');
		$this->load->helper('download');
		$this->load->model('PagesModel');
		$this->load->library('cart');
		$this->load->library('session');
		$this->lang->load('homepage', 'lithuanian');
	}

    public function view($page = 'home')
    {
	    $data['page_info'] = $this->PagesModel->get_page($page);
	    echo $this->lang->line('welcome_message'); die;

	    if($data['page_info'] == NULL)
	    {
	    	show_404();
	    }

        // getting visual stuff from the database
	    $data['slider']     = $this->PagesModel->get_slider();
	    $data['logo']       = $this->PagesModel->get_logo();
	    $data['products']   = $this->PagesModel->get_products();
	    $data['background'] = $this->PagesModel->get_background();

        // add +1 to views
	    $this->PagesModel->increment_view_count($page);

	    // cart stuff
	    if($this->is_logged_in())
	    {
	    	$data['cart'] = $this->set_cart();
	    }

	    // force_download('text.txt', 'testas');

	    $this->load->view('layout/header', $data);
	    $this->load->view('layout/content');
	    $this->load->view('layout/footer');
    }

    public function set_cart()
    {
    	$cart_data = array(
    		'id'    => rand(),
    		'qty'   => rand(1,10),
    		'price' => rand(1,30),
    		'name'  => 'Shoes'
    	);

    	$this->cart->insert($cart_data);

    	$cart = array();

    	foreach($this->cart->contents() as $row)
    	{
    		$cart['qty']   = $row['qty'];
    		$cart['price'] = $row['price'];
    	}

    	return $cart;
    }

    public function is_logged_in()
    {
    	return $this->session->userdata('user') ? TRUE : FALSE;
    }



}
