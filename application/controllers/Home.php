<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Home extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		//Load Dependencies

	}

	// List all your items
	public function index()
	{
		$data['title']	= 'Home';
		$this->load->view('partial', $data);
	}

}

/* End of file Home.php */
/* Location: ./application/controllers/Home.php */
