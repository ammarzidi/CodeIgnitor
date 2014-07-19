<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
Class controller extends CI_Controller
{
	public function index()
	{
		$this->load->view("test_view");
	}
}