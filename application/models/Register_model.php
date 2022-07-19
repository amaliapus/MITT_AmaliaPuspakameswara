<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// // Login userprofile
	// public function login($userprofilename,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('userprofile');
	// 	$this->db->where(array( 'userprofilename'	=> $userprofilename,
	// 							'password'	=>	SHA1($password)));
	// 	$this->db->order_by('userprofileID', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('userprofile', $data);
	}

}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */