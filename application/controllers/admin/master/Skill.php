<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skill extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('skill_model');
	}

	public function index()
	{
		$skill = $this->skill_model->listing();

		$data = array(	'title'		=> 'Skills',
						'skill'		=> $skill,
						'isi'		=> 'admin/master/skill/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('skillName','Skill Name','required',
			array('required' => '%s must be filled'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Add New Skill',
					  	'isi'	  	=> 'admin/master/skill/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'skillName' 			=> $i->post('skillName')
									);
			$this->skill_model->tambah($data);
			$this->session->set_flashdata('Success', 'Data has been added.');
			redirect(base_url('admin/master/skill'),'refresh');
		}
		// End database
	}

	public function edit($skillID)
	{
		$skill = $this->skill_model->detail($skillID);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('skillName','Skill Name','required',
			array('required' => '%s must be filled'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Edit Skill',
						'skill' 	=>  $skill,
					  	'isi'	  	=> 'admin/master/skill/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'skillID' 		=> $skillID,
							'skillName' 	=> $i->post('skillName')
									);
			$this->skill_model->edit($data);
			$this->session->set_flashdata('Success', 'Data has been edited.');
			redirect(base_url('admin/master/skill'),'refresh');
		}
		// End database
	}

	//  Delete skill
	public function delete($skillID)
	{
		$data = array('skillID' => $skillID);
		$this->skill_model->delete($data);
		$this->session->set_flashdata('Success', 'Data has been deleted.');
		redirect(base_url('admin/master/skill'),'refresh');
	}

}

/* End of file Skill.php */
/* Location: ./application/controllers/admin/Skill.php */