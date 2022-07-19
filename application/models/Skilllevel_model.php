<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skilllevel_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all skilllevel
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('skilllevel');
		$this->db->order_by('skillLevelID', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail skilllevel
	public function detail($skillLevelID)
	{
		$this->db->select('*');
		$this->db->from('skilllevel');
		$this->db->where('skillLevelID', $skillLevelID);
		$this->db->order_by('skillLevelID', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// // Login skilllevel
	// public function login($skillLevelname,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('skilllevel');
	// 	$this->db->where(array( 'skillLevelName'	=> $skillLevelName,
	// 							'password'	=>	SHA1($password)));
	// 	$this->db->order_by('skillLevelID', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('skilllevel', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('skillLevelID', $data['skillLevelID']);
		$this->db->update('skilllevel', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('skillLevelID', $data['skillLevelID']);
		$this->db->delete('skilllevel', $data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */