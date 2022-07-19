<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Skilllevel extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Skills',
						'isi'		=> 'admin/master/Skilllevel/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$data = array(	'title' 	=> 'Tambah Skill Level',
					  	'isi'	  	=> 'admin/master/skilllevel/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function edit()
	{
		$data = array(	'title' 	=> 'Edit Skill Level',
					  	'isi'	  	=> 'admin/master/skilllevel/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */