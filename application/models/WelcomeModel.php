<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {

	function __construct()
	{
		$this->load->database();		
	}

	public function index()
	{
		return true;
	}

	public function get_page($page_id)
	{
		$page_info = array();
		$query  = $this->db->query("SELECT * FROM cms_pages WHERE page_id = '$page_id'");
        foreach($query->result_array() as $row)
        {
        	$page_info['page_title']       = $row['page_title'];
        	$page_info['page_content']     = $row['page_content'];
        	$page_info['page_author']      = $row['page_author'];
        	$page_info['meta_description'] = $row['meta_description'];
        	$page_info['meta_keywords']    = $row['meta_keywords'];
        	$page_info['page_status']      = $row['page_status'];
        }

        return $page_info;
	}

}
