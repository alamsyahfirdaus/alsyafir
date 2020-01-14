<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Pengguna extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['title']	= 'Pengguna';
		$data['content']	= 'pengguna_index';
		$this->load->view('inclued', $data);
	}

}

/* End of file Pengguna.php */
/* Location: ./application/controllers/admin/Pengguna.php */
