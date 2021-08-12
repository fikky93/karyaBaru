<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Welcome extends CI_Controller {
	public function index()
	{
		$this->load->view('index');
	}
	public function profil()
	{
		$this->load->view('profil');
	}
	public function katalog()
	{
		$this->load->view('katalog');
	}

}
