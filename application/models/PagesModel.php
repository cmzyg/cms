<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class PagesModel extends CI_Model {

	function __construct()
	{
		$this->load->database();		
	}

	public function index()
	{
		return true;
	}

	public function get_page($page_url)
	{
		$page_info = array();
		$query = $this->db->query("SELECT * FROM cms_pages WHERE page_url = '$page_url'");
        foreach($query->result_array() as $row)
        {
        	$page_info['page_title']       = $row['page_title'];
        	$page_info['page_content']     = $row['page_content'];
        	$page_info['page_author']      = $row['page_author'];
        	$page_info['meta_description'] = $row['meta_description'];
        	$page_info['meta_keywords']    = $row['meta_keywords'];
        	$page_info['page_status']      = $row['page_status'];
        	$page_info['page_url']         = $row['page_url'];
        }

        return $page_info;
	}

	public function get_navigation()
	{
		$navigation_item = array();
		$query = $this->db->query("SELECT * FROM cms_pages WHERE in_menu = 1");
		return $query->result_array();
	}

	public function get_slider()
	{
		$slider = array();
        $query  = $this->db->query("SELECT * FROM cms_sliders WHERE status = 'active'");
        foreach($query->result_array() as $row)
        {
        	$slider['status']    = $row['status'];
        	$slider['image_url'] = $row['image_url'];
        	$slider['link_url']  = $row['link_url'];
        }

        return $slider;
	}

	public function increment_view_count($page_url)
	{
		$this->db->query("UPDATE cms_pages_stats SET view_count = view_count + 1 WHERE page_url = '$page_url'");
		return true;
	}

}
