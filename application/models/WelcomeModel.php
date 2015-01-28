<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class WelcomeModel extends CI_Model {

	function __construct()
	{
		
	}

	public function index()
	{
		return true;
	}

	public function get_name()
	{
		return md5('aaaaaa');
	}
}
