<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class pesanan extends MY_Controller {


	public function __construct()
	{
		parent::__construct();
		$this->load->model('Model_Menu');
	}

	public function index()
	{
		$this->load->view('home');
	}

	public function daftar_menu()
	{
		$data = $this->Model_Menu->GetAllMenu();
		$this->session->set_userdata('all_data', $data);
		$this->load->view('menu');
	}

	public function inputPemesan()
	{

		$data = array(
			'nama' => $this->input->post('nama')
		);

		$this->Model_Menu->input_pemesan($data);

		redirect('pesanan/daftar_menu');

	}

	public function pesan()
	{
		$query['data'] = $this->Model_Menu->getId($_GET['Kode_Menu']);
		$this->load->view('pesanan', $query);
	}
}
