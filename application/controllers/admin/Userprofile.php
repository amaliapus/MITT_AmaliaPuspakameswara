<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Userprofile extends CI_Controller {

	public function index()
	{
		$data = array(	'title'		=> 'Halaman Admin',
						'isi'		=> 'admin/userprofile/list'
					);
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function tambah()
	{
		$data = array(	'title' 	=> 'Tambah Skill',
					  	'isi'	  	=> 'admin/userprofile/tambah');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

	public function edit()
	{
		$data = array(	'title' 	=> 'Edit Skill',
					  	'isi'	  	=> 'admin/userprofile/edit');
		$this->load->view('admin/layout/wrapper', $data, FALSE);
	}

}

/* End of file Dasbor.php */
/* Location: ./application/controllers/admin/Dasbor.php */