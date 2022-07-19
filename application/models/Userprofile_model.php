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
		$this->db->order_by('username', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail userprofile
	public function detailUP($username)
	{
		$this->db->select('*');
		$this->db->from('userprofile');
		$this->db->where('username', $skillID);
		$this->db->order_by('username', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Edit
	public function editUP($data)
	{
		$this->db->where('username', $data['username']);
		$this->db->update('userprofile', $data);
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

	// Listing all userprofile
	public function listing2()
	{
		$this->db->select('userskills.*,
							userprofile.username,
							skill.skillID,
							skilllevel.skillLevelID');
		$this->db->from('userskills');
		// JOIN
		$this->db->join('skill', 'skill.skillID = userskills.skillID', 'left');
		$this->db->join('skilllevel', 'skilllevel.skillLevelID = userskills.skillLevelID', 'left');

		$this->db->join('userprofile', 'userprofile.username = userskills.username', 'left');
		
		$this->db->order_by('userSkillID', 'desc');
		$query = $this->db->get();
		return $query->result();
	}

	// Detail userskills
	public function detail($userSkillID)
	{
		$this->db->select('*');
		$this->db->from('userskills');
		$this->db->where('userSkillID', $skillID);
		$this->db->order_by('userSkillID', 'desc');
		$query = $this->db->get();
		return $query->row();
	}

	// Tambah
	public function tambah($data)
	{
		$this->db->insert('userskill', $data);
	}

	// Edit
	public function edit($data)
	{
		$this->db->where('userSkillID', $data['userSkillID']);
		$this->db->update('userskills', $data);
	}

	// Delete
	public function delete($data)
	{
		$this->db->where('userSkillID', $data['userSkillID']);
		$this->db->delete('userskills', $data);
	}
}

/* End of file Userprofile_model.php */
/* Location: ./application/models/Userprofile_model.php */