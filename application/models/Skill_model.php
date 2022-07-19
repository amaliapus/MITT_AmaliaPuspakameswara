<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill_model extends CI_Model {

	public function __construct()
	{
		parent::__construct();
		$this->load->database();
	}

	// Listing all skill
	public function listing()
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->order_by('skillID', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail skill
	public function detail($skillID)
	{
		$this->db->select('*');
		$this->db->from('skill');
		$this->db->where('skillID', $skillID);
		$this->db->order_by('skillID', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// // Login skill
	// public function login($skillname,$password)
	// {
	// 	$this->db->select('*');
	// 	$this->db->from('skill');
	// 	$this->db->where(array( 'skillname'	=> $skillname,
	// 							'password'	=>	SHA1($password)));
	// 	$this->db->order_by('skillID', 'desc');
	// 	$query = $this->db->get();
	// 	return $query->row();
	// }

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('skill', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('skillID', $data['skillID']);
		$this->db->update('skill', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('skillID', $data['skillID']);
		$this->db->delete('skill', $data);
	}
}

/* End of file User_model.php */
/* Location: ./application/models/User_model.php */