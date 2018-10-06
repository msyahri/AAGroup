<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/slider');
		$this->load->view('frontend/homepage');
		$this->load->view('frontend/bawah');
		$this->load->view('frontend/footer');

	}
}
