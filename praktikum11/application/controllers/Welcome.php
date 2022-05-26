<?php
defined('BASEPATH') or exit('No direct script access allowed');

class Welcome extends CI_Controller
{
	public function index()
	{

		$this->load->view('layouts/header');
		$this->load->view('layouts/navbar');
		$this->load->view('layouts/sidebar');
		$this->load->view('welcome_message');
		$this->load->view('layouts/footer');
	}
}
