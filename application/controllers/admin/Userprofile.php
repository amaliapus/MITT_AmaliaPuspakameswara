<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('userprofile_model');
		$this->load->model('skill_model');
		$this->load->model('skilllevel_model');
	}

	public function index()
	{
		$userprofile = $this->userprofile_model->listing();
		$userskills = $this->userprofile_model->listing2();

		$data = array(	'title'			=> 'Halaman Admin',
						'userprofile' 	=> $userprofile,
						'userskills' 	=> $userskills,
						'isi'			=> 'admin/userprofile/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}


	public function tambah()
	{
		// Ambil dari skill
		$skill = $this->skill_model->listing();

		// Ambil dari skill level
		$skilllevel = $this->skilllevel_model->listing();

		// Validasi input
		$valid = $this->form_validation;

		// $valid->set_rules('skill','skill','required',
		// 	array('required' => '%s harus diisi'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 		=> 'Tambah Skill',
						'skill'	  		=> $skill,	
						'skilllevel'  	=> $skilllevel,
					  	'isi'	  		=> 'admin/userprofile/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	
						  	'skillID' 		=> $i->post('skillID'),
							'skillLevelID' 	=> $i->post('skillLevelID')
									);
			$this->userprofile_model->tambah($data);
			$this->session->set_flashdata('sukses', 'Data telah ditambah');
			redirect(base_url('admin/userprofile'),'refresh');
		}
		// End database
	}


	public function edit($userSkillID)
	{
		// Ambil dari skill
		$skill = $this->skill_model->listing();

		// Ambil dari skill level
		$skilllevel = $this->skilllevel_model->listing();

		$userskills = $this->userprofile_model->detail($userSkillID);

		// Validasi input
		$valid = $this->form_validation;

		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 		=> 'Edit Skill',
						'skill'	  		=> $skill,	
						'skilllevel'  	=> $skilllevel,
						'userskills'  	=> $userskills,
					  	'isi'	  		=> 'admin/userprofile/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'userSkillID' 	=> $userSkillID,
							'skillName' 	=> $i->post('skillName')
									);
			$this->skill_model->edit($data);
			$this->session->set_flashdata('Success', 'Data has been edited.');
			redirect(base_url('admin/userprofile'),'refresh');
		}
		// End database
	}

	// Delete userskill
	public function delete($userSkillID)
	{
		$data = array('userSkillID' => $userSkillID);
		$this->userprofile_model->delete($data);
		$this->session->set_flashdata('Success', 'Data has been deleted.');
		redirect(base_url('admin/userprofile'),'refresh');
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */