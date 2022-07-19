<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skilllevel extends CI_Controller {

	// Load Model
	public function __construct()
	{
		parent::__construct();
		$this->load->model('skilllevel_model');
	}

	public function index()
	{
		$skilllevel = $this->skilllevel_model->listing();

		$data = array(	'title'			=> 'Skill Level',
						'skilllevel'	=> $skilllevel,
						'isi'			=> 'admin/master/Skilllevel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		// Validasi input
		$valid = $this->form_validation;

		$valid->set_rules('skillLevelName','Skill Level Name','required',
			array('required' => '%s must be filled'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 	=> 'Add New Skill Level',
					  	'isi'	  	=> 'admin/master/skilllevel/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'skillLevelName' 			=> $i->post('skillLevelName')
									);
			$this->skilllevel_model->tambah($data);
			$this->session->set_flashdata('Success', 'Data has been added.');
			redirect(base_url('admin/master/skilllevel'),'refresh');
		}
		// End database
	}

	public function edit($skillLevelID)
	{
		$skilllevel = $this->skilllevel_model->detail($skillLevelID);

		//validasi input
		$valid = $this->form_validation;

		$valid->set_rules('skillLevelName','Skill Level Name','required',
			array('required' => '%s must be filled'));


		if($valid->run()===FALSE) {
		// End validasi

		$data = array(	'title' 		=> 'Edit Skill Level',
						'skilllevel' 	=>  $skilllevel,
					  	'isi'	  		=> 'admin/master/skilllevel/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);

		// Masuk database
		}else{
			$i = $this->input;
			$data = array(	'skillLevelID' 		=> $skillLevelID,
							'skillLevelName' 	=> $i->post('skillLevelName')
									);
			$this->skilllevel_model->edit($data);
			$this->session->set_flashdata('Success', 'Data has been edited.');
			redirect(base_url('admin/master/skilllevel'),'refresh');
		}
		// End database
	}

	//  Delete skill level
	public function delete($skillLevelID)
	{
		$data = array('skillLevelID' => $skillLevelID);
		$this->skilllevel_model->delete($data);
		$this->session->set_flashdata('Success', 'Data has been deleted.');
		redirect(base_url('admin/master/skilllevel'),'refresh');
	}

}

/* End of file Skilllevel.php */
/* Location: ./application/controllers/admin/Skilllevel.php */