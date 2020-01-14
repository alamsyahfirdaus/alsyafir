<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {

	public function __construct()
	{
		parent::__construct();
		$this->load->library('form_validation');

	}

	public function index()
	{
		$this->form_validation->set_rules('email', 'Email', 'trim|required', [
			'required' => 'Email harus diisi'
		]);
		$this->form_validation->set_rules('password', 'Password', 'trim|required', [
			'required' => 'Password harus diisi'
		]);

		if ($this->form_validation->run() == FALSE) {
			$data['title'] = 'Login';
			$this->load->view('autentikasi/vLogin', $data);
		} else {
			$this->_login();
		}
	}


	private function _login()
	{
		$email = $this->input->post('email');
		$password = $this->input->post('password');

		$login = $this->db->get_where('user', ['email' => $email])->row_array();

		if ($login) {
			if ($login['is_active'] == 1) {
				if (password_verify($password, $login['password'])) {
					$data = [
						'email' => $login['email'],
						'role_id' => $login['role_id']
					];
					$this->session->set_userdata($data);
					if ($login['role_id'] == 1) {
						redirect('admin/dashboard');
					} else {
						redirect('home');
					}
				} else {
					$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Password tidak sesuai!</div>');
					redirect('login');
				}
			} else {
				$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Akun belum diaktivasi!</div>');
				redirect('login');
			}
		} else {
			$this->session->set_flashdata('message', '<div class="alert alert-danger" role="alert">Email belum terdaftar!</div>');
			redirect('login');
		}
	}

	public function logout()
	{
		 $this->session->unset_userdata('email');
		 $this->session->unset_userdata('role_id');
		 redirect('login');
	}
}
/* End of file Login.php */
/* Location: ./application/controllers/Login.php */
