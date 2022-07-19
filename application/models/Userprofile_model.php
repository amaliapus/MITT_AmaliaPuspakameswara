<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all userprofile
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('userprofile');
		$this->db->order_by('id_userprofile', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// // Login userprofile
	// public function login($userprofilename,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('userprofile');
	// 	$this->db->where(array( 'userprofilename'	=> $userprofilename,
	// 							'password'	=>	SHA1($password)));
	// 	$this->db->order_by('id_userprofile', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('userskills', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->update('userprofile', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->delete('userprofile', $data);
	}
}

/* End of file Userprofile_model.php */
/* Location: ./application/models/Userprofile_model.php */