<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Profile extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index()
	{
		$data['title'] = 'Profile';
		$data['content'] = 'profile_index';
		$data['login'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();
		$this->load->view('inclued', $data);
	}

	public function edit()
	{
		$data['title'] = 'Edit Profile';
		$data['content'] = 'profile_edit';
		$data['login'] = $this->db->get_where('user', ['email' => $this->session->userdata('email')])->row_array();

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', [
			'required' => 'Nama Lengkap harus diisi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required', [
			'required' => 'Email Lengkap harus diisi'
		]);
		$this->form_validation->set_rules('nohp', 'nohp', 'trim|required', [
			'required' => 'No. Handphone harus diisi'
		]);




		if ($this->form_validation->run() == FALSE) {
			$this->load->view('inclued', $data);
		} else {
			$data = [
				'nama_lengkap' => $this->input->post('nama_lengkap'),
				'email' => $this->input->post('email'),
				'nohp' => $this->input->post('nohp'),
			];



			$this->db->update('user', $data);
			redirect('admin/profile');
		}
	}


}

/* End of file Profile.php */
/* Location: ./application/controllers/admin/Profile.php */
