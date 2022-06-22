<?php
defined('BASEPATH') or exit('No direct script access allowed');
class Welcome extends CI_Controller
{
	function __construct()
	{

		parent::__construct();

		$this->load->helper('url'); // Load URL Helper for base_url() 
		$this->load->helper('html'); // Load HTML Helper for img() 

	}
	public function index()
	{

		$this->load->view('welcome_message');
	}
}
