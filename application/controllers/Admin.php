<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Admin extends CI_Controller {
	public function index()
	{
		$this->load->view('Admin/index');
	}

	public function pelanggan()
	{
		$this->load->view('Admin/pelanggan');
	}

	public function berlangsung()
	{
		$this->load->view('Admin/berlangsung');
	}

	public function berpotensi()
	{
		$this->load->view('Admin/berpotensi');
	}

	public function projek()
	{
		$this->load->view('Admin/projek');
	}

	public function profil()
	{
		$this->load->view('Admin/profil');
	}
}