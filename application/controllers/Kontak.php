<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Kontak extends CI_Controller {

	public function index()
	{
		$this->load->view('frontend/header');
		$this->load->view('frontend/menu');
		$this->load->view('frontend/kontak');
		$this->load->view('frontend/bawah');
		$this->load->view('frontend/footer');


	}
}
