<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Member_model extends CI_Model {

	public function getData()
	{
		$this->db->select('*');
		$this->db->from('user');
		$this->db->join('role', 'user.role_id = role.role_id', 'left');

		return $this->db->get();
	}

}

/* End of file Member_model.php */
/* Location: ./application/models/Member_model.php */