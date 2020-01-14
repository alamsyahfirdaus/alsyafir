<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index()
	{

		$this->form_validation->set_rules('nama_lengkap', 'Nama Lengkap', 'trim|required', [
			'required' => 'Nama Lengkap harus diisi'
		]);
		$this->form_validation->set_rules('email', 'Email', 'trim|required|valid_email|is_unique[user.email]', [
			'required' => 'Email harus diisi',
			'valid_email' => 'Email tidak valid',
			'is_unique' => 'Email sudah terdaftar'

		]);
		$this->form_validation->set_rules('password1', 'Password', 'trim|required|min_length[3]|matches[password2]',[
			'required' => 'Password harus diisi',
			'matches' => 'Password tidak sama',
			'min_length' => 'Minimal 3 karakter'
		]);
		$this->form_validation->set_rules('password2', 'Password', 'trim|required|matches[password1]');

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Daftar';
			$this->load->view('autentikasi/vRegister', $data);
		} else {
			$data = [
				'nama_lengkap' => htmlspecialchars($this->input->post('nama_lengkap', TRUE)),
				'email' => htmlspecialchars($this->input->post('email', TRUE)),
				'nohp' => '',
				'image' => 'default.png',
				'password' => password_hash($this->input->post('password1'), PASSWORD_DEFAULT),	
				'role_id' => 2,
				'is_active' => 1,
				'date_created' => time()
			];
			$this->db->insert('user', $data);
			$this->session->set_flashdata('message', '<div class="alert alert-success" role="alert">Selamat! pendaftaran berhasil. Silahkan Login</div>');
			redirect('login');
		}
	}
}

/* End of file Register.php */
/* Location: ./application/controllers/user/Register.php */
