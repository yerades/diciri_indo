<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Manajer extends CI_Controller {
	public function index()
	{
		$this->load->view('Manajer/index');
	}

	public function pelanggan()
	{
		$this->load->view('Manajer/pelanggan');
	}

	public function berlangsung()
	{
		$this->load->view('Manajer/berlangsung');
	}

	public function berpotensi()
	{
		$this->load->view('Manajer/berpotensi');
	}

	public function projek()
	{
		$this->load->view('Manajer/projek');
	}

	public function profil()
	{
		$this->load->view('Manajer/profil');
	}
}