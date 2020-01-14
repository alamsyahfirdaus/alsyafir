<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Members extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->model('member_model');

	}

	public function index()
	{
		$data['title']	= 'Semua Pengguna';
		$data['content']	= 'member_index';
		$data['button'] = $this->_button();
		$data['member']	= $this->member_model->getData()->result();
		$this->load->view('inclued', $data);
	}


	public function role1()
	{
		$data['title']	= 'Admin';
		$data['content']	= 'member_admin';
		$data['button'] = $this->_button();
		$data['member']	= $this->db->get_where('user', array('role_id' => 1))->result();
		$this->load->view('inclued', $data);
	}

	public function role2()
	{
		$data['title']	= 'User';
		$data['content']	= 'member_user';
		$data['button'] = $this->_button();
		$data['member']	= $this->db->get_where('user', array('role_id' => 2))->result();
		$this->load->view('inclued', $data);
	}

	private function _button()
    {
        $button = '<div class="btn-group">';
        $button .= '<button type="button" class="btn btn-primary btn-flat dropdown-toggle" data-toggle="dropdown">';
        $button .= 'Aksi';
        $button .= '</button>';
        $button .= '<div class="dropdown-menu">';
        $button .= '<a class="dropdown-item" href="#">Detail</a>';
        $button .= '</div>';
        $button .= '</div>';
        return $button;
    }

	// Add a new item
	public function add()
	{

	}

	//Update one item
	public function update( $id = NULL )
	{

	}

	//Delete one item
	public function delete( $id = NULL )
	{

	}
}

/* End of file Members.php */
/* Location: ./application/controllers/admin/Members.php */
